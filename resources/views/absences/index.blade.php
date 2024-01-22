<!-- resources/views/absensi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Absensi</h1>

    <!-- Tampilkan tabel daftar absensi -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Waktu Absen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensi as $absen)
                <tr>
                    <td>{{ $absen->id }}</td>
                    <td>{{ $absen->user_id }}</td>
                    <td>{{ $absen->waktu_absen }}</td>
                    <td>
                        <!-- Tambahkan tombol untuk edit dan hapus -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tambahkan tombol untuk menambahkan absensi baru -->
    <a href="{{ route('absensi.create') }}">Tambah Absensi Baru</a>
@endsection
