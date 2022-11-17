<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ParagraphRight;
use App\Http\Resources\ParagraphRightCollection;
use Illuminate\Http\Request;

class ParagraphRightController extends Controller
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
     * @param  \App\Models\ParagraphRight  $paragraphRight
     * @return \Illuminate\Http\Response
     */
    public function show(ParagraphRight $paragraphRight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParagraphRight  $paragraphRight
     * @return \Illuminate\Http\Response
     */
    public function edit(ParagraphRight $paragraphRight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParagraphRight  $paragraphRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParagraphRight $paragraphRight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParagraphRight  $paragraphRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParagraphRight $paragraphRight)
    {
        //
    }
}
