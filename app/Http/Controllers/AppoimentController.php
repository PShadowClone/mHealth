<?php

namespace App\Http\Controllers;

use App\appoiment;
use App\drug;
use App\laboratory;
use App\radiology;
use Illuminate\Http\Request;

class AppoimentController extends Controller
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
        //
        try{
            $appoiment =   appoiment::create([
                'diagnose_id' => $request['diagnose_id'],
                'decription' => $request['decription'],
                'note' => $request['note'],
                'status' => $request['status'],

            ]);
            return Controller::success('appoiment has been Added Sucssfuly', 'appoiment', $appoiment);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function show(appoiment $appoiment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function edit(appoiment $appoiment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appoiment $appoiment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appoiment $appoiment)
    {
        //
    }

    public function attachDrug(Request $request)
    {
        //
        try{
            $appoiment = appoiment::get()->where('id','=', $request['appoiment_id']);
            $drug = drug::get()->where('id','=', $request['drug_id']);
            $appoiment->drug()->attach($drug);
            return Controller::success('$drug has been attached Sucssfuly', 'appoiment', $appoiment);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }

    public function attachRadiology(Request $request)
    {
        //
        try{
            $appoiment = appoiment::get()->where('id','=', $request['appoiment_id']);
            $radiology = radiology::get()->where('id','=', $request['radiology_id']);
            $appoiment->radiology()->attach($radiology);
            return Controller::success('Radiology has been attached Sucssfuly', 'appoiment', $appoiment);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }

    public function attachLaboratory(Request $request)
    {
        //
        try{
            $appoiment = appoiment::get()->where('id','=', $request['appoiment_id']);
            $laboratory = laboratory::get()->where('id','=', $request['laboratory_id']);
            $appoiment->laboratory()->attach($laboratory);
            return Controller::success('laboratory has been attached Sucssfuly', 'appoiment', $appoiment);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }
}
