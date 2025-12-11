<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $todos = ToDo::all();

        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nimi' => 'required|string|max:10',
            'tehtavan_kuvaus' => 'nullable|string|max:1000',
            'status' => 'required|in:idea,toteutetaan,aloitettu,tehty 50%,tehty 70%,valmis,hylataan ehdotus,tehdaan seuraavaan versioon',
            'maarapaiva' => 'required',
            'kiireellisyys' => 'required',
        ]);

        ToDo::create($request->only(['nimi', 'tehtavan_kuvaus', 'status', 'maarapaiva', 'kiireellisyys']));
        
        return redirect()->route('todo.index')->with('success', 'Lisäys onnistui');
    }

    /**
     * Display the specified resource.
     */
    public function show(ToDo $todo)
    {
        //

        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDo $todo)
    {
        //
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDo $todo)
    {
        $request->validate([
        'nimi' => 'required|string|max:10',
        'tehtavan_kuvaus' => 'nullable|string|max:1000',
        'status' => 'required|in:idea,toteutetaan,aloitettu,tehty 50%,tehty 70%,valmis,hylätään ehdotus,tehdään seuraavaan versioon',
    ]);

        $todo->update($request->only(['nimi', 'tehtavan_kuvaus', 'status']));

        return redirect()->route('todo.index')->with('success', 'Päivitys onnistui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $todo)
    {
        //

        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Poisto onnistui');
    }
}
