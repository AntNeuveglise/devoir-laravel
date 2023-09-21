<?php

namespace App\Http\Controllers;

use App\Models\Porte;
use Illuminate\Http\Request;

class PorteController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Porte::all()->count());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Porte = new Porte();

        $Porte->batiment = $data['date_MIS'];
        $Porte->nombre_places = $data['date_MIS'];
         $Porte->is_ouverte = $data['date_MIS'];

        $Porte->save();

        return $this->index();
        // return redirect()->route('Porte.index');
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
    public function show(Porte $Porte)
    {
        dd($Porte->updated_at);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Porte $Porte)
    {
        $Porte->is_ouverte = !$Porte->is_ouverte;

        $Porte->save();

        dump($Porte->is_ouverte);
        dd($Porte->updated_at);
        // return redirect()->route('Porte.show', ['Porte' => $Porte->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Porte $Porte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Porte $Porte)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Porte $Porte)
    {
        //
    }

    function toto(Porte $Porte)
    {
        $Porte->nombre_places += 2;

        $Porte->save();

        dd($Porte->nombre_places);
    }
}
