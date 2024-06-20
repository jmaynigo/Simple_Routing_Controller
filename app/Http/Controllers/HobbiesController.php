<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Hobbies',
            'hobby1' => 'Singing',
            'hobby2' => 'Dancing',
            'hobby3' => 'Cooking',
            'hobby4' => 'Collecting Kpop Merchandise',
            'hobby5' => 'Playing Puzzle Games'
        );
        return view('hobbies', $data);
    }
}
