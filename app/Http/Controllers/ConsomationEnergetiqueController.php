<?php

namespace App\Http\Controllers;

use App\ConsomationEnergetique;
use Illuminate\Http\Request;

class ConsomationEnergetiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consomations_energetiques.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsomationEnergetique  $consomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function show(ConsomationEnergetique $consomationEnergetique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsomationEnergetique  $consomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsomationEnergetique $consomationEnergetique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsomationEnergetique  $consomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsomationEnergetique $consomationEnergetique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsomationEnergetique  $consomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsomationEnergetique $consomationEnergetique)
    {
        //
    }
}
