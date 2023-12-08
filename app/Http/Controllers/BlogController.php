<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Artikel::all();
        $number = 1;
        return view('blog', [
            'title' => 'tile',
            'data_artikel' => $blogs,
            'number' => $number
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahBlog(Request $request)
    {
       

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Artikel::insert([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'author' => $request->author,
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(string $blog)
    {
      $post = Artikel::where('slug', '=', $blog)->first();

      return view('edit', [
        'post'=> $post,
        'title' => 'edit blog | ' . $post->title
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(string $post, Request $request) 
    {
        $dataNeedToUpdate = Artikel::where('slug', '=', $post)->first();

        $statusUpdate = $dataNeedToUpdate->update([
            'title' => $request->title,
            'body' => $request->body,
            'author' => $request->author
        ]);
        if ($statusUpdate > 0) {
            return redirect()->route('post.index');
        }
         return redirect()->back()->with('eror', 'Gagal memperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $post) {
    
        $dataNeedToUpdate = Artikel::where('slug', '=', $post)->first();

        $statusDeleting = $dataNeedToUpdate->delete();

        if ($statusDeleting) {
            return redirect()->back();
        }
         return redirect()->back()->with('eror', 'Gagal menghapus!');

    }
}
