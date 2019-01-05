<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    public function index()
    {
        //
        $patients = Patient::all()->toArray();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patients = new Patient;
        return view('patients.create', ['patients' => $patients ]);         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $patient = $this->validate(request(), [
          'name' => 'required|max:100|min:5',
          'birth_date' => 'required|date',
          'civil_status' => 'required',
          'employment_status' => 'required',
          'gender' => 'required',
          'mobile' => 'numeric',
          'home' => 'numeric',
          'email' => 'email',
          'address' => 'required|max:100',
          'religion' => 'required|max:100',
          'valid_id' => 'alpha_num'                      
        ]);
        Patient::create($request->all());
        return back()->with('success', 'Patient '. $request->name .' has been added');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit',compact('patient','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $this->validate(request(), [
                  'name' => 'required|max:100|min:5',
                  'birth_date' => 'required|date',
                  'civil_status' => 'required',
                  'employment_status' => 'required',
                  'gender' => 'required',
                  'mobile' => 'numeric',
                  'home' => 'numeric',
                  'email' => 'email',
                  'address' => 'required|max:100',
                  'religion' => 'required|max:100',
                  'valid_id' => 'alpha_num'                      
                ]);
        
        $patient->name = $request->get('name');
        $patient->birth_date = $request->get('birth_date');
        $patient->civil_status = $request->get('civil_status');
        $patient->employment_status = $request->get('employment_status');
        $patient->gender = $request->get('gender');
        $patient->mobile = $request->get('mobile');
        $patient->email = $request->get('email');
        $patient->address = $request->get('address');
        $patient->religion = $request->get('religion');
        $patient->valid_id = $request->get('valid_id');      
        $patient->save();
        return redirect('patient')->with('success','Patient ' . $request->get('name') . ' has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('patient')->with('success','Patient has been deleted');
    }
}
