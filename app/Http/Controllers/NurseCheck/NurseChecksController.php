<?php

namespace App\Http\Controllers\NurseCheck;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\NurseCheck;
use App\Patient;
use Illuminate\Http\Request;

class NurseChecksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $nursechecks = NurseCheck::where('SIS', 'LIKE', "%$keyword%")
                ->orWhere('DIA', 'LIKE', "%$keyword%")
                ->orWhere('BPM', 'LIKE', "%$keyword%")
                ->orWhere('wound', 'LIKE', "%$keyword%")
                ->orWhere('infection', 'LIKE', "%$keyword%")
                ->orWhere('tube', 'LIKE', "%$keyword%")
                ->orWhere('patient_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $nursechecks = NurseCheck::latest()->paginate($perPage);
        }

        return view('nurseCheck.nurse-checks.index', compact('nursechecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $patient = Patient::where('uid', $request->patient_uid)->first();
        return view('nurseCheck.nurse-checks.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        $requestData['nurse_id'] = request()->user()->id;
        NurseCheck::create($requestData);

        return redirect('/nurse/patients/' . $request->patient_uid)->with('flash_message', 'Check added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $nursecheck = NurseCheck::findOrFail($id);

        return view('nurseCheck.nurse-checks.show', compact('nursecheck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $nursecheck = NurseCheck::findOrFail($id);

        return view('nurseCheck.nurse-checks.edit', compact('nursecheck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $nursecheck = NurseCheck::findOrFail($id);
        $nursecheck->update($requestData);

        return redirect('NurseCheck/nurse-checks')->with('flash_message', 'NurseCheck updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        NurseCheck::destroy($id);

        return redirect('NurseCheck/nurse-checks')->with('flash_message', 'NurseCheck deleted!');
    }
}