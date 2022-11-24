<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHome()
    {
        return view('pages.home');
    }
    public function getCreate()
    {
        return view('pages.create');
    } 
    public function getAbout()
    {
        return view('pages.about');
    } 

    public function getContact()
    {
        return view('pages.contact');
    } 
}
