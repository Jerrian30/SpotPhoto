@extends('layouts.master')
@section('title', 'Buat Data Customers')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Customers</h1>

        <div class="card">
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" name="name" required value="{{ old('name', $customer->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="day">Tanggal Pesanan:</label>
                        <input type="date" class="form-control" name="day" required value="{{ old('day', $customer->day) }}">
                    </div>

                    <div class="form-group">
                        <label for="term">Waktu Pemesanan:</label>
                        <input type="text" class="form-control" name="term" required value="{{ old('term', $customer->term) }}">
                    </div>

                    <div class="form-group">
                        <label for="studio">Studio:</label>
                        <input type="text" class="form-control" name="studio" required value="{{ old('studio', $customer->studio) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection