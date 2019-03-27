{{--  llamar layout  --}}
@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Publicacion
            </div>
            <div class="card-body" style="padding:30px">

                <form method="POST" action="{{ url('admin/post/create') }}">
                    {{--  seguridad   --}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Texto</label>
                        <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Publicar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
