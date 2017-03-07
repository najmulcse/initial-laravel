@extends('layout')

@section('content')

@section('title')
    Teacher List
@stop

    <div class="div name">

        @if($teacher)
            @foreach($teacher as $name)
                <li> {{$name}}</li>

             @endforeach
         @else
           <h3>There are no teachers</h3>

         @endif
    </div>
@endsection