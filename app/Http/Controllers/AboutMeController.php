<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'About Me',
            'name' => 'Janelle P. Maynigo',
            'age' => '21',
            'birthday' => 'October 18, 2002',
            'address' => 'Calasiao, Pangasinan',
            'dream' => 'Pilot',
            'currentCareerPath' => 'IT Professional'
        );
        return view('aboutMe', $data);
    }
}
