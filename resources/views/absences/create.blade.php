<!-- resources/views/absensi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Absensi Baru</h1>

    <!-- Tampilkan formulir untuk membuat absensi baru -->
    <form action="{{ route('absensi.store') }}" method="post">
        @csrf
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>
        <br>
        <label for="waktu_absen">Waktu Absen:</label>
        <input type="datetime-local" name="waktu_absen" required>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <!-- Tambahkan tombol untuk kembali ke daftar absensi -->
    <a href="{{ route('absensi.index') }}">Kembali</a>
@endsection
