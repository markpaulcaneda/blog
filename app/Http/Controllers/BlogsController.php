<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Create;

class BlogsController extends Controller
{
    public function form(Request $request){
    	$blogs = Blog::all();
    	return view('blogs', compact('blogs'));
    }
    public function postBlog(Request $request){
    	$title = $request->title;
    	$author = $request->author;
    	$subtitle = $request->subtitle;
    	$content = $request->content;
    	$date = $request->date;

    	$blog = new Blog;
    	$blog->title = $title;
    	$blog->author = $author;
    	$blog->content = $content;
    	$blog->subtitle = $subtitle;
    	$blog->date = $date;
    	$blog->save();

    	\Session::flash('flash_message', 'Your Blog Has Been Successfully Published!');

    	return redirect('/blogs');
    }
     public function editBlog(Request $request, $id){
    	$blog = Blog::find($id);
    	return view('edit-blog', compact('blog'));
    }
    public function saveEdit(Request $request){
    	$id = $request->id;
    	$title = $request->title;
    	$author = $request->author;
    	$content = $request->content;
    	$subtitle = $request->subtitle;
    	$date = $request->date;

    	$blog = Blog::find($id);
    	$blog->id = $id;
    	$blog->title = $title;
    	$blog->author = $author;
    	$blog->content = $content;
    	$blog->subtitle = $subtitle;
    	$blog->date = $date;
    	$blog->save();

    	\Session::flash('flash_message', 'Your Blog Has Been Successfully Edit!');


    	return redirect('/blogs');
    }
     public function deleteBlog(Request $request, $id){
    	$blog = Blog::find($id);
    	$blog->delete();

    	\Session::flash('flash_message', 'Your Blog Has Been Successfully Deleted!');


    	return redirect('/blogs');
    }
    
}
