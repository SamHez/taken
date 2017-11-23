<?php

namespace App\Http\Controllers;

use App\Reporting;
use Illuminate\Http\Request;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('welcome');
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
        
                Reporting::create(request()->all());
                return redirect('/')->with('message', 'Message sent!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function show(Reporting $reporting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporting $reporting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporting $reporting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporting  $reporting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporting $reporting)
    {
        //
    }
}