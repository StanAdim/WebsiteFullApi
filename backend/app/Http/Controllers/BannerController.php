<?php

namespace App\Http\Controllers;

use App\Models\admin\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return response([
            'message'=> 'All banners',
            'data'=> $banners
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'title'=> 'required',
            'slug'=> '',
            'order'=> '',
            'description'=> 'required',
            'imgPath'=> 'required',
            'categoryId'=> 'required',
        ]);
    if ($validator->fails())
        {
         return response()->json([
          'message' => 'Validation fails',
          'errors' => $validator->errors()
        ],422);
        }
    $banner = Banner::create($validator->validated());
            return response()->json([
                'message' => 'New banner posted',
                'data' => $banner
            ],200);
    }


    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
