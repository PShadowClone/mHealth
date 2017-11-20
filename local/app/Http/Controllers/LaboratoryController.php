<?php

namespace App\Http\Controllers;

use App\laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
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
            $laboratory =  laboratory::all();
            return Controller::success('laboratory has been fitched Sucssfuly', 'laboratory', $laboratory);
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
            $laboratory =  laboratory::create([
                'name' => $request['name'],

            ]);
            return Controller::success('laboratory has been Added Sucssfuly', 'laboratory', $laboratory);
        }catch (QueryException $exception){
            return Controller::filed('you should add all required information', 404);
        }catch (\Exception $exception){
            return Controller::filed('something went wrong', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function show(laboratory $laboratory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function edit(laboratory $laboratory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laboratory $laboratory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function destroy(laboratory $laboratory)
    {
        //
    }
}
