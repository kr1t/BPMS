<?php

namespace App\Http\Controllers\Check;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Check;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChecksController extends Controller
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
            $checks = Check::where('urine_color', 'LIKE', "%$keyword%")
                ->orWhere('skin', 'LIKE', "%$keyword%")
                ->orWhere('food_type', 'LIKE', "%$keyword%")
                ->orWhere('respiratory_system', 'LIKE', "%$keyword%")
                ->orWhere('bedsore', 'LIKE', "%$keyword%")
                ->orWhere('phlegm', 'LIKE', "%$keyword%")
                ->orWhere('patient_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $checks = Check::latest()->paginate($perPage);
        }

        return view('checks.index', compact('checks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $patient = Patient::where('uid', $request->patient_uid)->first();
        $checkCount = Check::where('patient_id', $patient->id)->count() + 1;
        $isToDayCheck = Check::whereDate('created_at', Carbon::now())->count();
        return view('checks.create', compact('patient', 'checkCount', 'isToDayCheck'));
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
        $this->validate($request, [
            'urine_color' => 'required',
            'skin' => 'required'
        ]);
        $requestData = $request->all();

        Check::create($requestData);

        return redirect('checks/create?patient_uid=' . $request->patient_uid)->with('flash_message', 'Check added!');
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
        $check = Check::findOrFail($id);

        return view('checks.show', compact('check'));
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
        $check = Check::findOrFail($id);

        return view('checks.edit', compact('check'));
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
        $this->validate($request, [
            'urine_color' => 'required',
            'skin' => 'required'
        ]);
        $requestData = $request->all();

        $check = Check::findOrFail($id);
        $check->update($requestData);

        return redirect('checks')->with('flash_message', 'Check updated!');
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
        Check::destroy($id);

        return redirect('checks')->with('flash_message', 'Check deleted!');
    }
}