<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\kategori;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        //get posts
        $renders = barang::with('kategoris')->paginate(10);

        //render view with posts
        return view('user.index', compact('renders'));
    }
}
