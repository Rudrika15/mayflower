<?php

namespace App\Http\Controllers;

use App\Models\Testpackage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestpackageRequest;
use App\Http\Requests\UpdateTestpackageRequest;

class TestpackageController extends Controller
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
     * @param  \App\Http\Requests\StoreTestpackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestpackageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testpackage  $testpackage
     * @return \Illuminate\Http\Response
     */
    public function show(Testpackage $testpackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testpackage  $testpackage
     * @return \Illuminate\Http\Response
     */
    public function edit(Testpackage $testpackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestpackageRequest  $request
     * @param  \App\Models\Testpackage  $testpackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestpackageRequest $request, Testpackage $testpackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testpackage  $testpackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testpackage $testpackage)
    {
        //
    }
}
