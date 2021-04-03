<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
    	return view('artikel.comments');
    }

    public function trash()
    {
    	return view('artikel.trash');
    }
}
