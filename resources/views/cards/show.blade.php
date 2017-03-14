@extends('layout')

@section('content')
    <div class="container">
        <h2> {{$card->title}}</h2>

          <div class="row">

              <div class="col-sm-3"></div>
              <div class="col-sm-6 col-sm-offset-6">
                  <form method="POST" action="/card/{{$card->id}}/notes">
                       {{csrf_field()}}
                          <ul>
                        @foreach($card->notes as $note)
                            <li class="form-control"> {{$note->body}}</li>
                        @endforeach
                          </ul>
                      <div class="form-group">
                          <input class="form-control" name="note_body">
                      </div>
                      <div class="form-group">
                          <button class="btn btn-primary">Add note</button>
                      </div>
                  </form>
              </div>
          </div>

    </div>
@stop

