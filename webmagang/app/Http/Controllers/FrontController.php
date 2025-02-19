<?php

namespace App\Http\Controllers;

use App\Models\Recomendation;
use App\Models\Wisata;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $wisatas = Wisata::latest()->limit(8)->get();
        $recomendations = Recomendation::latest()->limit(3)->get();
        return view('front.home', compact('wisatas', 'recomendations'));
    }

    public function about()
    {
        return view('front.about', [
            'title' => 'About',
        ]);
    }

    public function blog()
    {
        $wisatas = Wisata::latest()->get();

        return view('front.blog.index', [
            'title' => 'Blog',
            'wisatas' => $wisatas,
        ]);
    }

    public function blogDetail(string $slug, string $id)
    {
        $wisata = Wisata::where("judul", $slug)
            ->where("id", $id)
            ->firstOrFail();

        $newest = Wisata::inRandomOrder()
            ->limit(3)
            ->whereNot('id', $id)
            ->get();

        return view('front.blog.show', [
            'title' => 'Blog',
            'wisata' => $wisata,
            'newest' => $newest,
        ]);
    }

    public function services()
    {
        $recomendations = Recomendation::latest()->get();

        return view('front.recomendation', [
            'title' => 'Recomendation',
            'recomendations' => $recomendations,
        ]);
    }

    public function contact()
    {
        return view('front.contact', [
            'title' => 'Contact',
        ]);
    }
}
