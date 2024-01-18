@extends('layouts.master')
@section('title', 'Home')
@section('js')
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

@endsection



@section('content')
<h1>HALAMAN HOME</h1>

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 bg-white rounded shadow">
        
                <!-- Card Body -->
                <div class="card-body">
                    
                        {!! $chart->container() !!}
                
                    
                </div>
    </div>

</div>

@endsection