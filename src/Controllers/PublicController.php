<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World News';
        view('page', compact('title'));
    }

    public function us()
    {
        $title = 'U.S News';
        view('page', compact('title'));
    }
    
    public function tech()
    {
        $title = 'Tech News';
        view('page', compact('title'));
    }
}
