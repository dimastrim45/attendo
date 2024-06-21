<?php

namespace App\Http\Controllers;

use App\Models\emergency_contact;
use App\Http\Requests\Storeemergency_contactRequest;
use App\Http\Requests\Updateemergency_contactRequest;

class EmergencyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeemergency_contactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(emergency_contact $emergency_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(emergency_contact $emergency_contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateemergency_contactRequest $request, emergency_contact $emergency_contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(emergency_contact $emergency_contact)
    {
        //
    }
}
