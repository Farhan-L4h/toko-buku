<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{

    // index
    public function index(): View
    {
        //get posts
        $barangs = barang::with('kategoris')->paginate(10);

        //render view with posts
        return view('admin.index', compact('barangs'));
    }

    public function barang(): View
    {
        //get posts
        $barangs = barang::with('kategoris')->paginate(5);

        //render view with posts
        return view('admin.barang', compact('barangs'));
    }

    // kategori
    public function kategori(): View
    {
        //get posts
        $kategoris = kategori::paginate(10);

        //render view with posts
        return view('admin.kategori', compact('kategoris'));
    }



    // form barang

    public function createbrng(): View
    {
        //get posts
        $barangs = barang::all();
        $kategoris = kategori::all();

        //render view with posts
        return view('admin.form-barang', compact('barangs','kategoris'));
    }
    // store
    public function simpan(Request $request): RedirectResponse
    {

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/data/gambar barang', $image->hashName());

        // Validasi formulir dengan pesan yang dapat disesuaikan
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'stock' => 'required'
        ]);

        // Membuat data kategori
        barang::create([
            'image' => $image->hashName(),
            'nama_barang' => $request->nama_barang,
            'id_kategori' => $request->id_kategori,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'deskripsi' => $request->deskripsi
        ]);

        // Mengalihkan ke indeks dengan pesan sukses
        return redirect()->route('barang')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    // form kategori

    public function createktgr(): View
    {
        //get posts
        $barangs = barang::latest()->get();

        //render view with posts
        return view('admin.form-kategori', compact('barangs'));
    }

    // store
    public function store(Request $request): RedirectResponse
    {
        // Validasi formulir dengan pesan yang dapat disesuaikan
        $this->validate($request, [
            'kategori' => 'required',
        ]);

        // Membuat data kategori
        kategori::create([
            'nama_kategori' => $request->kategori,
        ]);

        // Mengalihkan ke indeks dengan pesan sukses
        return redirect()->route('kategori')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
