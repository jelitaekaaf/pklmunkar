<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show(eskul $eskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit(eskul $eskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eskul $eskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy(eskul $eskul)
    {
        //
    }
}
