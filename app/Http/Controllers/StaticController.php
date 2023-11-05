<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function contact()
    {
        return view('contact');
    }




}
