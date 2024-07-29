<?php

namespace App\Http\Controllers;

use App\Models\BLOG;
use Illuminate\Http\Request;

class BLOGController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $blogs=BLOG::paginate(3);
        return view('frontend.blog',compact('blogs'));
    }
    public function Home_page()
    {
        $blogs=BLOG::paginate(3);
        return view('frontend.index',compact('blogs'));
    }
    public function add_blog()
    {
        return view('dashboard.addblog');
    }

    public function blogs_Admin()
    {
        $blogs=BLOG::paginate(1);
        return view('dashboard.blog',compact('blogs'));
    }

    public function blogdetails($id)
    {
        $blog=BLOG::find($id);
        return view('frontend.blogdetails',compact('blog'));
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
        $path=$request->image->store('public/pics');
        BLOG::create([
            'main_title'=>$request->main_title,
            'Introduction'=>$request->Introduction,
            'alt_text'=>$request->alt_text,
            'blog_tags'=>$request->blog_tags,
            'meta_description'=>$request->meta_description,
            'sub_title_one'=>$request->sub_title_one,
            'description_one'=>$request->description_one,
            'sub_title_two'=>$request->sub_title_two,
            'description_two'=>$request->description_two,
            'sub_title_three'=>$request->sub_title_three,
            'description_three'=>$request->description_three,
            'image'=>$path
        ]);

        return redirect()->route('add_blog')->with('status','Blog added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog=BLOG::find($id);
        return view('dashboard.editblog',compact('blog'));
    }
    public function Linkedin($id)
    {
        $blog = BLOG::findOrFail($id);

        return view('frontend.blogdetails', [
            'BLOG' => $blog,
            'url' => route('Blogdetails', $blog->id),
            'title' => $blog->main_title,
            'summary' => $blog->Introduction,
            'source' => config('app.name')
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BLOG $bLOG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog=BLOG::find($id);
        if($request->has('image')){
            $path=$request->image->store('public/pics');
        }else{
            $path=$blog->image;
        }
        $blog->main_title = $request->main_title;
        $blog->Introduction = $request->Introduction;
        $blog->alt_text = $request->alt_text;
        $blog->blog_tags = $request->blog_tags;
        $blog->meta_description= $request->meta_description;
        $blog->sub_title_one = $request->sub_title_one;
        $blog->description_one = $request->description_one;
        $blog->sub_title_two = $request->sub_title_two;
        $blog->description_two = $request->description_two;
        $blog->sub_title_three = $request->sub_title_three;
        $blog->description_three = $request->description_three;
        $blog->image = $path;
        $blog->save();

        return redirect()->route('View_Blogs')->with('status','blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog=BLOG::find($id)->delete();
        return redirect()->route('View_Blogs')->with('status','Blog Deleted successfully');
    }
}
