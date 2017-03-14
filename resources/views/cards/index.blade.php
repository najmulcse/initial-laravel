@extends('layout')


@section('content')

    <h2> All Cards </h2>

    @if($cards)

        @foreach($cards as $card)
                <div class="title">

                    <a href="cards/{{$card->id}}" >  {{$card->title}} </a>
                </div>
        @endforeach
     @endif
@stop
