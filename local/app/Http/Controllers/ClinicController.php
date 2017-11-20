<?php

namespace App\Http\Controllers;

use App\clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
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

            $clinic =  clinic::all();
            return Controller::success('Diagnose has been fitched Sucssfuly', 'clinic', $clinic);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
        return clinic::all();
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
            $clinic =   clinic::create([
                'name' => $request['name'],
                'mobile' => $request['mobile'],
                'address' => $request['address'],

            ]);
            return Controller::success('clinic has been Added Sucssfuly', 'clinic', $clinic);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function show(clinic $clinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function edit(clinic $clinic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clinic $clinic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinic $clinic)
    {
        //
    }
}
