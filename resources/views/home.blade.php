<!-- resources/views/chart.blade.php -->

@extends('layouts.master')

@section('js')
<script src="{{ $allstudio->cdn() }}"></script>


{{ $allstudio->script() }}
@endsection


@section('content')
<div class="container mt-4">
    <div class="row">
      <!-- Grafik Besar -->
      <div class="col-lg-10 mx-auto mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Besar</h5>
            {!! $allstudio->container() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
