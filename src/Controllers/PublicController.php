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

    public function templating() {
        $name = 'Kaspar';
        $age = 32;
        view('templating', compact('name', 'age'));
    }
}
