<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalBlogs = Blog::count();
        $totalCategories = Category::count();
        $totalContacts = Contact::count();
        return view('admin.dashboard', compact('totalCategories', 'totalBlogs', 'totalContacts'));
    }
    public function contact()
    {
        $totalBlogs = Blog::count();
        $totalCategories = Category::count();
        $totalContacts = Contact::count();
        $contacts = Contact::latest()->get();
        return view('admin.contact', compact('contacts', 'totalContacts', 'totalBlogs', 'totalCategories'));
    }
    public function comment()
    {
        $totalBlogs = Blog::count();
        $totalCategories = Category::count();
        $totalContacts = Contact::count();
        $totalComments = Comment::count();
        $comments = Comment::latest()->get();
        return view('admin.comment', compact('comments', 'totalContacts', 'totalBlogs', 'totalCategories', 'totalComments'));
    }
}
