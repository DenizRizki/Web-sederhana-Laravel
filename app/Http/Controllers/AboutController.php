<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = [
        [
            'nama' => 'Deniz',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Rangga',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Rafa',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Raihan',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Yusuf',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Sattar',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Devano',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Bimasena',
            'kelas' => 'IX-3'
        ],
         [
            'nama' => 'Hadi',
            'kelas' => 'IX-3'
        ],
    ];
    return view('about',
    [
        'tittle' => 'Daftar Laravel',
    ], compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
