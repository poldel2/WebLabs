<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Pagination\Paginator;

class MyBlogController extends Controller
{
    public function action_index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(2);
        return view('myblog', compact('posts'));
    }
    
    
    
    public function show($id)
    {
        $post = BlogPost::where('post_id', $id)->first();
        return response()->json($post);
    }

}