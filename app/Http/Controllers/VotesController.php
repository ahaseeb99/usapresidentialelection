<?php

namespace App\Http\Controllers;

use App\Models\Votes;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Votes::all();
        return view('admin.vote.index', compact('data'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Votes $votes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Votes $votes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Votes $votes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Votes $votes)
    {
        //
    }
}