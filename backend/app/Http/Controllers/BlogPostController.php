<?php

namespace App\Http\Controllers;

use App\Models\admin\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = BlogPost::all();
        return response()->json([
            'message'=>'All Post',
            'data'=> $blogs,
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
            'body'=> 'required',
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
    $blog = BlogPost::create($validator->validated());
            return response()->json([
                'message' => 'New Blog created',
                'data' => $blog
            ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
