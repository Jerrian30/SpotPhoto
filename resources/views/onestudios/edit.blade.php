@extends('layouts.master')
@section('title', 'Buat Data Customers')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Customers</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('onestudios.update', $onestudio->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" name="name" required value="{{ old('name', $onestudio->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="day">Tanggal Pesanan:</label>
                        <input type="date" class="form-control" name="day" required value="{{ old('day', $onestudio->day) }}">
                    </div>

                    <div class="form-group">
                        <label for="term">Waktu Pemesanan:</label>
                        <input type="text" class="form-control" name="term" required value="{{ old('term', $onestudio->term) }}">
                    </div>

                    <div class="form-group">
                        <label for="studio">Jumlah:</label>
                        <input type="text" class="form-control" name="people" required value="{{ old('studio', $onestudio->people) }}">
                    </div>

                    <div class="form-group">
                        <label for="studio">Harga:</label>
                        <input type="text" class="form-control" name="price" required value="{{ old('price', $onestudio->price) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
