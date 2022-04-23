<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

//use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

//request
use App\Http\Doctor\Request\StoreDoctorRequest;
use App\Http\Doctor\Request\UpdateDoctorRequest;

//user everything
//use Gate;
use Auth;

//model here
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Create a new Controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doctor = Doctor::orderBy('created_at', 'desc')->get();

        //for select2
        $specialist = Specialist::orderBy('name', 'asc')->get();

        return view('pages.backsite.operational.doctor.index', compact('doctor', 'specialist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //get all request from frontsite
        $data = $request->all();

        //store to database
        $doctor = Doctor::create($data);

        alert()->success('Success Message', 'Successfully added new Doctor');

        return redirect()->route('backsite.doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('pages.backsite.operational.doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //for select2
        $specialist = Specialist::orderBy('name', 'asc')->get();

        return view('pages.backsite.operational.doctor.edit', compact('doctor', 'specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedDoctorRequest $request, Doctor $doctor)
    {
        //get all request from front site
        $data = $request->all();

        //update to database
        $doctor->update($data);

        alert()->success('Success Message', 'Successfully updated to doctor');

        return redirect()->route('backsite.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->forceDelete();

        alert()->success('Success Message', 'Successfully deleted doctor');
        return back();
    }
}
