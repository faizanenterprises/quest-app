<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloglist()
    {
        return view('pages.bloglist');
    }

    public function blogdetails()
    {
        return view('pages.blog-details');
    }

    public function blog_studyabroad()
    {
        return view('pages.blog_studyabroad');
    }

    public function blog_top_universities()
    {
        return view('pages.blog_top_universities');
    }

    public function blog_second_attempt()
    {
        return view('pages.blog_second_attempt');
    }

    public function blog_doc_spouse()
    {
        return view('pages.blog_doc_spouse');
    }
}

