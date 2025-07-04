<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; // Ensure you have the correct namespace for the Student model

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student= Student::all();
        return ['result'=>$student];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ['result'=>"list created"];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['result'=>"new member added"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ['result'=>"new member updated"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
