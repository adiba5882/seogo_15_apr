<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
// aikhane App\Models silo but comment name a laravel sorasori ney na. a jonno App\Models er por \Comment add kore App\Models\Comment; dite holo.
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function list()
    {
        $comments = Comment::latest()->get();
        return view('pages.blog_details', compact('comments'));
    }
    public function store(Request $request, Blog $blog)
    {
// dd($blog);
        $comments = Comment::create([
            'blog_id' => $blog->id,
            'comment' => $request->comment,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function edit(Comment $comment)
    {
        return view('admin.comment_edit', compact('comment'));
    }
    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'comment' => $request->comment,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website, 
        ]);
        return redirect()->route('comment');
    }
    public function delete($id)
    {
        $comments = Comment::findOrFail($id);
        $comments->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully!');
    }
    public function updateStatus(Comment $comment)
    {
        if ($comment->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        // dd($contact);
        $comment->update([
            'status' => $status,
        ]);
        return back();
    }
}
