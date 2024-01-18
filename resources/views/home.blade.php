<!-- resources/views/chart.blade.php -->

@extends('layouts.master')

@section('js')
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Grafik Pelanggan</div>
                    <div class="card-body">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $chart->script() !!}
@endsection
