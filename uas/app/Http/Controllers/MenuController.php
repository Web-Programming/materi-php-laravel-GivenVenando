<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public  function create()
    {
        return view('menu.create');
    }

     public function index()
    {
        $menus = \App\Models\Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'price' => 'required|integer',
        'image_url' => 'required|url',
    ]);

    \App\Models\Menu::create($request->all());

    return redirect()->route('dashboard')->with('success', 'Menu berhasil ditambahkan');
}
}
