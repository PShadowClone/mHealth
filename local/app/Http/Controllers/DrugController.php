<?php

namespace App\Http\Controllers;

use App\drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $drug =  drug::all();
            return Controller::success('Diagnose has been fitched Sucssfuly', 'drug', $drug);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
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
            $drug =  drug::create([
                'name' => $request['name'],
                'side_effects' => $request['side_effects'],

            ]);
            return Controller::success('drug has been Added Sucssfuly', 'drug', $drug);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function show(drug $drug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function edit(drug $drug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drug $drug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function destroy(drug $drug)
    {
        //
    }
}
