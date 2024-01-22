@extends('layouts.master')
@section('title', 'Buat Data Customers')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Customers</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('twostudios.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" name="name" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="day">Tanggal Pesanan:</label>
                        <input type="date" class="form-control" name="day" required>
                    </div>

                    <div class="form-group">
                        <label for="term">Waktu Pemesanan:</label>
                        <input type="text" class="form-control" name="term" required>
                    </div>

                    <div class="form-group">
                        <label for="people">Jumlah:</label>
                        <input type="text" class="form-control" name="people" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Harga:</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
