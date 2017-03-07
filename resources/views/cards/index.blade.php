@extends('layout')


@section('content')

    <h2> All Cards </h2>

    @if($cards)

        @foreach($cards as $card)
                <div class="title">
                    <li> {{$card->title}}</li>
                </div>
        @endforeach
     @endif
@stop
