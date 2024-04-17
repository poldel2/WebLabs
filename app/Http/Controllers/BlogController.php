<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Validators\FormValidation;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function action_index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(10);
        return view('blog', ['posts' => $posts]);
    }
    public function store(Request $request)
    {
        $validator = new FormValidation;
    
        $validator->setRule('title', 'isNotEmpty');
        $validator->setRule('content', 'isNotEmpty');
        
        $validator->validate($request->all());
        
        if ($validator->hasErrors()) {
            return back()->withErrors($validator->showErrors())->withInput();
        }
    
        $post = new BlogPost;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->created_at = Carbon::now();
    
        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image')->getRealPath());
            $post->image = base64_encode($image);
        }
    
        $post->save();
    
        return redirect('/blog');
    }
    
}
