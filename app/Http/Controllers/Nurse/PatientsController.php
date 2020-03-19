<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Patient;
use App\Check;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
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
            $patients = Patient::Where('uid', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('date_of_birth', 'LIKE', "%$keyword%")
                ->orWhere('blood_type', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('drug_allergy', 'LIKE', "%$keyword%")
                ->orWhere('symptoms', 'LIKE', "%$keyword%")
                ->orWhere('caregiver_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $patients = Patient::latest()->paginate($perPage);
        }

        return view('nurse.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('nurse.patients.create');
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
        $user = Auth::user();

        $requestData = $request->all();
        if ($request->hasFile('avatar')) {
            $requestData['avatar'] = $request->file('avatar')
                ->store('uploads', 'public');
            $requestData['uid'] = time();
            $requestData['nurse_id'] = $user->id;
        }

        Patient::create($requestData);

        return redirect('nurse/patients')->with('flash_message', 'Patient added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $patient = Patient::where('uid', $id)->first();
        $checks = Check::where('patient_id', $patient->id)->where(function ($query) use ($request) {

            if ($request->m_status == 1) {
                $query->whereMonth('created_at', Carbon::now()->subMonth(1));
            } else {
                $query->whereMonth('created_at', Carbon::now());
            }
        })->get();
        return view('nurse.patients.show', compact('patient', 'checks'));
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
        $patient = Patient::findOrFail($id);

        return view('nurse.patients.edit', compact('patient'));
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
        if ($request->hasFile('avatar')) {
            $requestData['avatar'] = $request->file('avatar')
                ->store('uploads', 'public');
        }

        $patient = Patient::findOrFail($id);
        $patient->update($requestData);

        return redirect('nurse/patients')->with('flash_message', 'Patient updated!');
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
        Patient::destroy($id);

        return redirect('nurse/patients')->with('flash_message', 'Patient deleted!');
    }
}