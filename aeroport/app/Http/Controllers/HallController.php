<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
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
        $Hall = Hall::all();
        return view('Hall.index', compact('Hall'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Hall.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallRequest $request)
    {
        $data = $request->all();

        $Hall = new Hall();

        $Hall->libelle = $data['libelle'];
        $Hall->niveau = $data['niveau'];

        $Hall->save();

        return redirect()->route('Hall.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $Hall)
    {
        return view('Hall.show', compact('Hall'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hall $Hall)
    {
        return view('Hall.edit', compact('Hall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HallRequest $request, Hall $Hall)
    {
        $data = $request->all();

        $Hall->libelle = $data['libelle'];
        $Hall->niveau = $data['niveau'];

        $Hall->save();

        return redirect()->route('Hall.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $Hall)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Hall $Hall)
    {
        //
    }
}
