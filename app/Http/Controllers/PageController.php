<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class PageController extends Controller
{
    public function home(Request $request)
    {

        // $query = Blog::where('status', 1)->query();

        // if (request()->search) {
        //     $blogs = $query->where('title', 'like', '%' . request()->search . '%');
        // }
        // $blogs = $query->latest()->paginate(5);

        $blogs = Blog::where('status', 1)
            ->when(request()->search, function ($query) {
                $query->where('title', 'LIKE', '%' . request()->search . '%')  
                    ->orWhere('description', 'LIKE', '%' . request()->search . '%')
                    ->orWhereHas('category', function ($q) {
                        return $q->where('name', 'like', '%' . request()->search . '%');
                    });
            })->when(request()->category, function ($q) { 
 
                $q->whereHas('category', function ($query) {
                    $query->where('id', request()->category);
                });
            })
            ->latest()->paginate(5);

        // $blogs = Blog::where('status', 1)->latest()->limit(5)->get();
        $recentPosts = Blog::where('status', 1)->latest()->limit(5)->get();

        $categories = Category::where('status', 1)->latest()->limit(5)->get();
        // dd($recentPosts);
        return view('pages.home', compact('blogs', 'recentPosts', 'categories'));
    }
    public function blog_details(Blog $blog, Request $request)
    {
        $previous = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();

        $next = Blog::where('id', '>', $blog->id)->orderBy('id')->first();
        $comments = $blog->comments()
            ->when($request->search, function ($query) use ($request) {
                $query->where('comment', 'LIKE', '%' . $request->search . '%');
            })
            ->latest()->get();
        $categories = Category::where('status', 1)->latest()->limit(5)->get();
        $recentPosts = Blog::where('status', 1)->latest()->limit(5)->get();
        return view('pages.blog_details', compact('blog', 'recentPosts', 'categories', 'comments', 'previous', 'next'));
    }
}
