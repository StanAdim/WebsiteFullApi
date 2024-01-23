<?php

namespace App\Http\Controllers;

use App\Models\admin\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::all();
        return response([
            'message'=> 'All features',
            'data'=> $features
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'title'=> 'required',
            'brief'=> 'required',
            'order'=> '',
            'link'=> 'required',
        ]);
    if ($validator->fails())
        {
         return response()->json([
          'message' => 'Validation fails',
          'errors' => $validator->errors()
        ],422);
        }
    $feature = Feature::create($validator->validated());
            return response()->json([
                'message' => 'New feature created',
                'data' => $feature
            ],200);
    }


    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
