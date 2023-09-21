<?php

namespace App\Http\Controllers;

use App\Http\Requests\TerminalRequest;
use App\Models\Hall;
use App\Models\Terminal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TerminalController extends Controller
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
        $Terminals = Terminal::all();

        return view('Terminal.index', compact('Terminals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Halls = Hall::all();

        return view('Terminal.create', compact('Halls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TerminalRequest $request)
    {
        $data = $request->all();

        $Terminal = new Terminal();

        $Terminal->nom = $data['nom'];
        $Terminal->emplacement = $data['emplacement'];
        $Terminal->date_MIS = $data['date_MIS'];
        $Terminal->Hall_id = $data['Hall_id'];

        $Terminal->save();

        return redirect()->route('Terminal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Terminal $Terminal)
    {
        $date = Carbon::parse($Terminal->date_MIS);
        $retraite = false;
        if ($date->year < 1980) {

        }

        return view('Terminal.show', compact('Terminal', 'retraite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terminal $Terminal)
    {
        $Halls = Hall::all();

        return view('Terminal.edit', compact('Terminal', 'Halls'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TerminalRequest $request, Terminal $Terminal)
    {
        $data = $request->all();

        $Terminal->nom = $data['nom'];
        $Terminal->emplacement = $data['emplacement'];
        $Terminal->date_MIS = $data['date_MIS'];
        $Terminal->Hall_id = $data['Hall_id'];

        $Terminal->save();

        return redirect()->route('Terminal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terminal $Terminal)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Terminal $Terminal)
    {
        //
    }
}
