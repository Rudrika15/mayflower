<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   
    public function index()
    {
        $blog = Blog::paginate(5);
        return view('admin.blog.index',compact('blog'));
    }


    public function create()
    {
        $blog = Blog::all();
        return view('admin.blog.create',compact('blog'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',

        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        if ($request->photo) {
            $blog->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('blogphotos'),  $blog->photo);
        } else {
            $blog->photo = "user.jpg";
        }

        $blog->status = 'N';
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Created Successfully');
    }

    
    public function show(Blog $blog)
    {
        //
    }

    
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',

        ]);
        $id = $request->id;
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        if ($request->photo) {
            $blog->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('blogphotos'),  $blog->photo);
        } else {
            $blog->photo = "user.jpg";
        }

        $blog->status = 'N';
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Updated Successfully');
    }

    
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->status = 'D';
        $blog->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
