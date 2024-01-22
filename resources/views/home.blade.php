<!-- resources/views/chart.blade.php -->

@extends('layouts.master')

@section('js')
<script src="{{ $allstudio->cdn() }}"></script>
<script src="{{ $studio1->cdn() }}"></script>


{{ $allstudio->script() }}
{{ $studio1->script() }}



@include('grafik.pendapatan')

@endsection


@section('content')
<div class="container mt-4">
  <div class="row">
    <!-- Grafik Besar -->
    <div class="col-lg-12 mx-auto mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Besar</h5>
          {!! $studio1->container() !!}
        </div>
      </div>
    </div>

    <!-- Grafik Kecil 1 -->
    <div class="col-lg-4 mx-auto mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Kecil 1</h5>
          {!! $allstudio->container() !!}
        </div>
      </div>
    </div>

    <!-- Grafik Kecil 2 -->
    <div class="col-lg-4 mx-auto mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Kecil 2</h5>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
