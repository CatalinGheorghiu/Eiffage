<?php

namespace App\Http\Controllers;

use App\DetailsConsomationEnergetique;
use Illuminate\Http\Request;

class DetailsConsomationEnergetiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details_energetique.index');
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
     * @param  \App\DetailsConsomationEnergetique  $detailsConsomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function show(DetailsConsomationEnergetique $detailsConsomationEnergetique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailsConsomationEnergetique  $detailsConsomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailsConsomationEnergetique $detailsConsomationEnergetique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailsConsomationEnergetique  $detailsConsomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailsConsomationEnergetique $detailsConsomationEnergetique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailsConsomationEnergetique  $detailsConsomationEnergetique
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailsConsomationEnergetique $detailsConsomationEnergetique)
    {
        //
    }
}
