<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ParagraphRight;
use App\Http\Resources\ParagraphRightCollection;
use App\Http\Resources\ParagraphRightResource;
use Illuminate\Http\Request;
use DB;

class ParagraphRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lefts = ParagraphRight::all(); 
        return new ParagraphRightCollection($lefts);
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
        $inputs = $request->all();
        $left_id=$inputs['id'];  
        ParagraphRight::where('paragraph_left_id', $left_id)->delete();
        $paragraph = new ParagraphRight();
        $paragraph->paragraph_left_id=$left_id;
        $paragraph->save();
        $right = ParagraphRight::where('paragraph_left_id', $left_id)->first(); 
        return new ParagraphRightResource($right);
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
    public function destroy($paragraphRight)
    {
        ParagraphRight::where('id', $paragraphRight)->delete();
        return response()->json(['status' => 'deleted']);
    }
}
