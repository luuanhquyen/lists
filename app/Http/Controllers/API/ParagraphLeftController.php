<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ParagraphLeft;
use App\Http\Resources\ParagraphLeftCollection;
use Illuminate\Http\Request;

class ParagraphLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lefts = ParagraphLeft::all(); 
        return new ParagraphLeftCollection($lefts);
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
     * @param  \App\Models\ParagraphLeft  $paragraphLeft
     * @return \Illuminate\Http\Response
     */
    public function show(ParagraphLeft $paragraphLeft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParagraphLeft  $paragraphLeft
     * @return \Illuminate\Http\Response
     */
    public function edit(ParagraphLeft $paragraphLeft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParagraphLeft  $paragraphLeft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParagraphLeft $paragraphLeft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParagraphLeft  $paragraphLeft
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParagraphLeft $paragraphLeft)
    {
        //
    }
}
