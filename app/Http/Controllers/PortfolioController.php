<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
    function homePage(){
        return view('pages.home');
    }
    function skillPage(){
        return view('pages.skill');
    }
    function projectPage(){
        return view('pages.project');
    }

    function aboutPage(){
        return view('pages.about');
    }
    function contactPage(){
        return view('pages.contact');
    }
}
