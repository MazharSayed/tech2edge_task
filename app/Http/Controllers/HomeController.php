<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pageCount = Page::count(); // Count of pages
        $contentBlockCount = \App\Models\ContentBlock::count(); // Count of content blocks

        return view('home', compact('pageCount', 'contentBlockCount'));
    }
}
