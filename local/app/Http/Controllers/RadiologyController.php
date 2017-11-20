<?php

namespace App\Http\Controllers;

use App\radiology;
use Illuminate\Http\Request;

class RadiologyController extends Controller
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
            $radiology =  radiology::all();
            return Controller::success('radiology has been fitched Sucssfuly', 'radiology', $radiology);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
        return radiology::all();
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
            $radiology =  radiology::create([
                'name' => $request['name'],

            ]);
            return Controller::success('radiology has been Added Sucssfuly', 'radiology', $radiology);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\radiology  $radiology
     * @return \Illuminate\Http\Response
     */
    public function show(radiology $radiology)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\radiology  $radiology
     * @return \Illuminate\Http\Response
     */
    public function edit(radiology $radiology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\radiology  $radiology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, radiology $radiology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\radiology  $radiology
     * @return \Illuminate\Http\Response
     */
    public function destroy(radiology $radiology)
    {
        //
    }
}
