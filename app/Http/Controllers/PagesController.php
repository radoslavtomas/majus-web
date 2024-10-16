<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function research()
    {
        return Inertia::render('Research');
    }

    public function engagement()
    {
        return Inertia::render('Engagement');
    }

    public function teaching()
    {
        return Inertia::render('Teaching');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
}
