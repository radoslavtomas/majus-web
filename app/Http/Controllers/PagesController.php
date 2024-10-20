<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        $page = Page::where('key', 'home')->firstOrFail();

        return Inertia::render('Home', [
            'page' => $page
        ]);
    }

    public function about()
    {
        return $this->returnGenericPage();
    }

    public function research()
    {
        return $this->returnGenericPage();
    }

    public function engagement()
    {
        return $this->returnGenericPage();
    }

    public function teaching()
    {
        return $this->returnGenericPage();
    }

    public function contact()
    {
        $pageKey = Request::segment(1);

        $page = Page::where('key', $pageKey)->firstOrFail();

        return Inertia::render('Contact', [
            'page' => $page
        ]);
    }

    public function returnGenericPage()
    {
        $pageKey = Request::segment(1);

        $page = Page::where('key', $pageKey)->firstOrFail();

        return Inertia::render(ucfirst($pageKey), [
            'page' => $page
        ]);
    }
}
