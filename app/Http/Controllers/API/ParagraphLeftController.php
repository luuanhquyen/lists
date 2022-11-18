<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ParagraphLeft;
use App\Models\ParagraphRight;
use App\Http\Resources\ParagraphLeftCollection;
use Illuminate\Http\Request;
use DB;

class ParagraphLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choosen = ParagraphRight::select('paragraph_left_id')->get()->toArray();
        $lefts = ParagraphLeft::whereNotIn('id', $choosen)->get();   
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
