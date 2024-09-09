<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    public function index() : View
    {
        $recepcionistas = Recepcionista::all();
        return view('recepcionistas.index', compact('recepcionistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('recepcionistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecepcionistaRequest $request) : RedirectResponse
    {
        Notice::create($request->validated());

        return redirect()->route('notices.index')
                ->withSuccess('New notice is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recepcionista $recepcionista) : View
    {
        return view('recepcionistas.show', compact('recepcionista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recepcionista $recepcionista) : View
    {
        return view('recepcionistas.edit', compact('recepcionista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecepcionistaRequest $request, Recepcionista $recepcionista) : RedirectResponse
    {
        $recepcionista->update($request->validated());

        return redirect()->back()
                ->withSuccess('Recepcionista atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recepcionista $recepcionista) : RedirectResponse
    {
        $recepcionista->delete();

        return redirect()->route('$recepcionistas.index');
    }
}
