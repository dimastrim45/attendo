<?php

namespace App\Http\Controllers;

use App\Models\tax_status;
use App\Http\Requests\Storetax_statusRequest;
use App\Http\Requests\Updatetax_statusRequest;

class TaxStatusController extends Controller
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
    public function store(Storetax_statusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tax_status $tax_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tax_status $tax_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetax_statusRequest $request, tax_status $tax_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tax_status $tax_status)
    {
        //
    }
}
