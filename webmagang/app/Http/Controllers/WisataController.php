<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisatas = Wisata::latest()->get();
        return view('admin.wisata.index', compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'judul' => 'required',
            'descrip' => 'required',
            'istimewa' => 'required',
            'tips' => 'required',
            'harga' => 'required',
            'lokasi' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $wisatas = new Wisata();
        $wisatas->judul = $request->input('judul');
        $wisatas->descrip = $request->input('descrip');
        $wisatas->istimewa = $request->input('istimewa');
        $wisatas->tips = $request->input('tips');
        $wisatas->harga = $request->input('harga');
        $wisatas->lokasi = $request->input('lokasi');
        $wisatas->image = $imageName;
        $wisatas->save();

        return redirect(route('admin.wisata.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $wisata)
    {
        return redirect(route('admin.wisata.edit', [$wisata]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png|max:2048',
            'judul' => 'required',
            'descrip' => 'required',
            'istimewa' => 'required',
            'tips' => 'required',
            'harga' => 'required',
            'lokasi' => 'required',

        ]);

        $wisatas = Wisata::findOrFail($id);

        if ($request->has('image')) {
            //hapus file lama
            if ($wisatas->image) {
                File::delete('uploads/' . $wisatas->image);
            }

            // masukan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $wisatas->image = $imageName;
        }

        $wisatas->judul = $request->input('judul');
        $wisatas->descrip = $request->input('descrip');
        $wisatas->istimewa = $request->input('istimewa');
        $wisatas->tips = $request->input('tips');
        $wisatas->harga = $request->input('harga');
        $wisatas->lokasi = $request->input('lokasi');
        $wisatas->save();

        return redirect(route('admin.wisata.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wisatas = Wisata::findOrFail($id);

        if ($wisatas->image) {
            File::delete('uploads/' . $wisatas->image);
        }

        $wisatas->delete();
        return redirect(route('admin.wisata.index'));
    }
}
