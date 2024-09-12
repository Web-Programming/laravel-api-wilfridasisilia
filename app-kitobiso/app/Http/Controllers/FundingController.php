<?php

namespace App\Http\Controllers;

use App\Models\Funding;
use App\Models\User;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'status' => 'success',
            'message' => 'Data fundings berhasil diambil',
            'data' => Funding::all(),
        ];  
        return response()->json($data);
        // return Funding::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $input = request()->all();
        User::create($input);
        return $input;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Funding $funding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funding $funding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funding $funding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funding $funding)
    {
        //
    }
}
