<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {
        return view('admin.pages.home');
    }

    public function count() {
        $data = [
            'data' => Genre::all(),
        ];
        return view('');
    }
}