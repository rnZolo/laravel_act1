<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function me(){
        $arr = [["message" => 'me'],
                ["title" => 'Me']
        ];

        return view('page.me', ["message" => $arr]);
    }

    public function home_town(){
        $arr = [["message" => 'me'],
                ["title" => 'Home Town : Binangonan Rizal']
        ];
        return view('page.home_town',  ["message" => $arr]);
    }

    public function fav(){
        $arr = [["message" => 'me'],
                ["title" => 'Things I like']
        ];
        return view('page.fav', ["message" => $arr]);
    }
}
