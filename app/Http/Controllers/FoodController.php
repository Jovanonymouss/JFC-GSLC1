<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $data = [
            'fastfood' => ['Fried Chickin', 'Root Biir'],
            'photo' => ['https://i.ibb.co/hVFZQDB/image-removebg-preview-1.png', 'https://i.ibb.co/P9tpbdH/image-removebg-preview-3.png'],
            'description' => ['This fried chickin will smack your tounge like a bee.','This rootbiir kinda makes u feel dizzy and lazy.'],
            'stocks' => ['25', '0']
        ];
        return view('fastfood\menu', $data);
    }
}
