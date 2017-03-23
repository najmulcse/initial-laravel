@extends('layout')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Edit the Note </h2>

            <form method="POST" action="/notes/{{$note->id}}">

                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control " type="text" name="note_body" >{{$note->body}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update note</button>
                </div>
            </form>
        </div>
    </div>
@endsection