<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onestudio;

class OnestudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $onestudios = Onestudio::whereDate('day', now()->format('Y-m-d'))
        ->orderBy('term')
        ->get();
        return view('onestudios.index', compact('onestudios'));
    }
    public function indexall()
    {
        $onestudios = Onestudio::all();
        return view('onestudios.index', compact('onestudios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('onestudios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'day' => 'required|date',
            'term' => 'required|string',
            'people' => 'required|string',
            'price' =>'required|integer',
        ]);
        Onestudio::create($request->all());
        return redirect()
        ->route('onestudios.index')
        ->with('success', 'Berhasil menambah data customers');
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
    public function edit(Onestudio $onestudio)
    {
        return view('onestudios.edit', compact('onestudio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Onestudio $onestudio)
    {
        $request->validate([
            'name' => 'required|string',
            'day' => 'required|date',
            'term' => 'required|string',
            'people' => 'required|string',
            'price' =>'required|integer',
        ]);
        $onestudio->update($request->all());
        return redirect()
        ->route('onestudios.index')
        ->with('success', 'Customer berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Onestudio $onestudio)
    {
        $onestudio->delete();

        return redirect()
        ->route('onestudios.index')
        ->with('delete', 'Customer berhasil dihapus');
    }
}
