<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::get();
        return view('absences.index', compact('absences'));
    }

    public function create()
    {
        // Tampilkan formulir untuk membuat absensi baru
        return view('absences.create');
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'absen_time' => 'required|date',
        ]);

        // Simpan data absensi baru
        Absence::create($request->all());

        return redirect()->route('absences.index')->with('success', 'Absensi berhasil ditambahkan!');
    }

    // Tambahkan fungsi edit, update, dan destroy sesuai kebutuhan
}
