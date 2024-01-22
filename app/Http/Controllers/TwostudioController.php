<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use App\Models\Twostudio;

class TwostudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $twostudios = Twostudio::whereDate('day', now()->format('Y-m-d'))
        ->orderBy('term')
        ->get();
        return view('twostudios.index', compact('twostudios'));
    }
    public function indexall()
    {
        $twostudios = Twostudio::all();
        return view('twostudios.index', compact('twostudios'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('twostudios.create');
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
        Twostudio::create($request->all());
        return redirect()
        ->route('twostudios.index')
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
    public function edit(Twostudio $twostudio)
    {
        return view('twostudios.edit', compact('twostudio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Twostudio $twostudio)
    {
        $request->validate([
            'name' => 'required|string',
            'day' => 'required|date',
            'term' => 'required|string',
            'people' => 'required|string',
            'price' =>'required|integer',
        ]);
        $twostudio->update($request->all());
        return redirect()
        ->route('twostudios.index')
        ->with('success', 'Berhasil menambah data customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Twostudio $twostudio)
    {
        $twostudio->delete();

        return redirect()
        ->route('twostudios.index')
        ->with('delete', 'Customers berhasil dihapus');
    }
}
