<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Skills',
            'skill1' => 'Good with Math',
            'skill2' => 'Interpersonal Communication Skills',
            'skill3' => 'Adaptable and Willingness to Learn',
            'skill4' => 'Knowledgeable with Microsoft Office Tools',
            'skill5' => 'Basic Knowledge in Java, Python, and HTML'
        );
        return view('skills', $data);
    }
}
