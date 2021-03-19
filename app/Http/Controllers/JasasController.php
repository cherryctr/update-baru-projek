<?php

namespace App\Http\Controllers;

use App\Models\Jasas;
use Illuminate\Http\Request;
use App\Models\Kategoris;
use Illuminate\Support\Facades\DB;

class JasasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoris = Kategoris::All();
        $jasas = DB::table('jasas')->paginate(9);
        return view('layouts.jasa.index-jasa',compact('kategoris','jasas',['jasas'=> $jasas]));
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
     * @param  \App\Models\Jasas  $jasas
     * @return \Illuminate\Http\Response
     */
    public function show(Jasas $jasas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jasas  $jasas
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasas $jasas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jasas  $jasas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasas $jasas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jasas  $jasas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasas $jasas)
    {
        //
    }
}
