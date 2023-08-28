<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(){
        // dd($requests);
        return view('page.form');
    }

    function create(Request $requests){
        $name = $requests->input('name');
        $date = $requests->input('date');
        $content = $requests->input('content');
       
        return view('page.form', compact('name', 'date', 'content'));
    }
}
