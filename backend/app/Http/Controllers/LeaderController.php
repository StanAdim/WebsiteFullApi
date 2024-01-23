<?php

namespace App\Http\Controllers;

use App\Models\admin\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaders = Leader::all();
        return response([
            'message'=> 'All Leaders',
            'data'=> $leaders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'name'=> 'required',
            'designation'=> 'required',
            'email'=> 'required',
            'order'=> 'required',
            'imgPath'=> 'required',
        ]);
    if ($validator->fails())
        {
         return response()->json([
          'message' => 'Validation fails',
          'errors' => $validator->errors()
        ],422);
        }
    $leader = Leader::create($validator->validated());
            return response()->json([
                'message' => 'New leader created',
                'data' => $leader
            ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leader $leader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leader $leader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leader $leader)
    {
        //
    }
}
