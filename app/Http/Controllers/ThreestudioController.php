<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use App\Models\Threestudio;

class ThreestudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threestudios = Threestudio::whereDate('day', now()->format('Y-m-d'))
        ->orderBy('term')
        ->get();
        return view('threestudios.index', compact('threestudios'));
    }
    public function indexall()
    {
        $threestudios = Threestudio::all();
        return view('threestudios.index', compact('threestudios'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('threestudios.create');
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
        ]);
        Threestudio::create($request->all());
        return redirect()
        ->route('threestudios.index')
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
    public function edit(Threestudio $threestudio)
    {
        return view('threestudios.edit', compact('threestudio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Threestudio $threestudio)
    {
        $request->validate([
            'name' => 'required|string',
            'day' => 'required|date',
            'term' => 'required|string',
            'people' => 'required|string',
        ]);
        $threestudio->update($request->all());
        return redirect()
        ->route('threestudios.index')
        ->with('success', 'Berhasil menambah data customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Threesdtudio $threestudio)
    {
        $threestudio->delete();

        Redirect()
        ->route('threestudios.index')
        ->with('delete', 'Customers berhasil dihapus');
    }
}
