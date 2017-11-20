<?php

namespace App\Http\Controllers;

use App\diagnoses;
use App\doctor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        try{
        $doctor_id = Auth::user()->doctor->first()->id;
      $diagnoses =  diagnoses::create([
            'doctor_id' => $doctor_id,
            'patient_id' => $request['patient_id'],
            'arrival_case' => $request['arrival_case'],
            'payed' => $request['payed'],
            'imprtance' => $request['imprtance'],
        ]);
      return Controller::success('diagnose has been Added Sucssfuly', 'diagnose', $diagnoses);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\diagnoses  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function show(diagnoses $diagnoses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\diagnoses  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function edit(diagnoses $diagnoses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\diagnoses  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diagnoses $diagnoses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\diagnoses  $diagnoses
     * @return \Illuminate\Http\Response
     */
    public function destroy(diagnoses $diagnoses)
    {
        //
    }
}
