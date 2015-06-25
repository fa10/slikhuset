<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $posts = Post::all()->take(6);
        return view('home')->with('posts', $posts);
    }

    public function getKolding()
    {
        return view('kolding');
    }

    public function getHorsens()
    {
        return view('horsens');
    }

    public function getKontakt()
    {
        return view('kontakt');
    }

}
