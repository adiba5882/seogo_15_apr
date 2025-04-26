<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.blogs.create', compact('categories'));
    }
    public function list()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.list', compact('blogs'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);
        $blogs = Blog::create([
            'photo' => $request->photo->store('blogs', 'public'),
            'title' => $request->title,
            'short_description' => $request->s_desc,
            'description' => $request->desc,
            'category_id' => $request->cate_id,
            'status' => 1,
        ]);
        return redirect()->route('blog.list');
    }
    public function edit(Blog $blog)
    {
        $categories = Category::latest()->get();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
        ]);
        if ($request->has('photo')) {
            if ($blog->photo && Storage::exists($blog->photo)) {
                Storage::delete($blog->photo);
            }
            $photo = $request->photo->store('blogs', 'public');
        } else {
            $photo = $blog->photo;
        }
        $blog->update([
            'photo' => $photo,
            'title' => $request->title,
            'short_description' => $request->s_desc,
            'description' => $request->desc,
            'category_id' => $request->cate_id
        ]);
        return redirect()->route('blog.list');
    }
    public function delete($id)
    {
        $blog = Blog::findOrFail($id); // আগে blog টা খুঁজে বের করতে হবে

        // যদি ছবি থাকে তাহলে delete করতে হবে
        if ($blog->photo && Storage::disk('public')->exists($blog->photo)) {
            Storage::disk('public')->delete($blog->photo);
        }

        $blog->delete(); // তারপর blog টা delete

        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
    public function statusUpdate(Blog $blog)
    {
        if ($blog->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $blog->update([
            'status' => $status,
        ]);
        return back();
    }
}
