@extends('layouts.master')
@section('title', 'Data Customers')
@section('content')

<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
@endif

<form action="{{ route('threestudios.index') }}" class="form-inline my-2 my-md-0 navbar-search">
    @csrf
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control bg-light border-2 small" placeholder="Search for..." >
        <div class="input-group-append">
            <button type="submit" class="btn" style="background-color: pink;">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>



    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Studio 3</h1>
        <a href="#" class="text-white d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: pink;"><i
                class="fas fa-download fa-sm text-white"></i> Cetak </a>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-center" style="color: pink;">
                {{ Request::url() === route('threestudios.indexall') ? 'Data Customers' : 'Data Customers Hari ini' }}
            </h6>
            <a href="{{ route('threestudios.create') }}" class="btn" style="background-color: pink; color: white;">Tambah Customers</a>
            <a href="{{ Request::url() === route('threestudios.indexall') ? route('threestudios.index') : route('threestudios.indexall') }}" class="btn" style="background-color: pink; color: white;">
                {{ Request::url() === route('threestudios.indexall') ? 'Lihat Data Hari Ini' : 'Lihat Semua Data' }}
            </a>
         <div class="card-body">
            <div class="table-responsive">
                @if($threestudios->isEmpty())
                    <p class="text-center">Data tidak ditemukan.</p>
                @else
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tanggal</th>
                            <th>jam pemesanan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tanggal</th>
                            <th>jam pemesanan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach($threestudios as $threestudio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $threestudio->name }}</td>
                            <td>{{ $threestudio->day }}</td>
                            <td>{{ $threestudio->term }}</td>
                            <td>{{ $threestudio->people }}</td>
                            <td>
                                <a href="{{ route('threestudios.edit', $threestudio->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('threestudios.destroy', $threestudio->id) }}" method="post" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data karyawan {{ $threestudio->nama }}?')"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>  </div>
     
@endsection
