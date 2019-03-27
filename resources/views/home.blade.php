@extends('layouts.master')

{{--  yield  --}}
@section('content')
<div class="row">
    <div class="card-columns pt-5">
        @foreach( $posts as $key => $post )
        <div class="card border-dark">
            <div class="card-body">
                <h5 class="card-title"> {{$post->title}}</h5>
                <hr>
                <p class="card-text">{{$post->message}}</p>
                <p class="card-text"><small class="text-muted">{{date('d/m/Y', strtotime($post->created_at)) }}</small></p>
                {{--  dar formato a la fecha  --}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
