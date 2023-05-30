<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();

        // Kirim data posting ke tampilan
        return view('pagemateri', compact('posts'));
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
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'file_name' => 'required',
            'material_type' => 'required',
            'material_description' => 'required',
            'upload_file' => 'required|file',
        ]);


        // Simpan data ke database
        $post = new Post;
        $post->file_name = $request->file_name;
        $post->material_type = $request->material_type;
        $post->material_description = $request->material_description;
        $post->upload_file = $request->file('upload_file')->store('uploads');
        $post->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Post created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //public function show()

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
