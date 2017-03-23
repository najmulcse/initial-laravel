@extends('layout')

@section('content')
    <div class="container">


          <div class="row">

              <div class="col-md-6 col-md-offset-3">
                  <h2> {{$card->title}}</h2>
                          <ul class="list-group">
                        @foreach($card->notes as $note)
                            <li class="list-group-item">
                                {{$note->body}}
                                <a class="pull-right" href="#">{{$note->user->username}}</a>
                            </li>
                        @endforeach
                          </ul>

                  <hr>
                 <h2>Add a new Note</h2>
                  <form method="POST" action="/card/{{$card->id}}/notes">

                      {{csrf_field()}}

                      <div class="form-group">
                          <textarea class="form-control " type="text" name="body"  > {{old('body')}}</textarea>
                      </div>
                      <div class="form-group">
                          <button class="btn btn-primary">Add note</button>
                      </div>
                  </form>

                  @if(count($errors))

                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                          @endforeach
                    @endif

              </div>
          </div>

    </div>
@stop

