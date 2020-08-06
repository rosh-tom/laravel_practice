<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Welcome to Laravel Practice'
        );
        return view('pages.index') -> with($data);
    }
    public function about(){
        $data = array(
            'title' => "About Us"
        );
        return view('pages.about') -> with($data);
    }
    public function services(){
         $data = array(
             'title' => 'Services',
             'services' => ['Web Design','Programming','SEO']
         );
        return view('pages.services') -> with($data);
    }
}
