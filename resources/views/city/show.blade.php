@extends('layouts.app')
@section('title',$title)

@section('content')
    <section>
        @foreach($showplaces as $value)

            <a href="/{{$slugCountry}}/{{$slugCity}}/{{$value->slug}}/">{{$value->name}}</a><br>

        @endforeach
    </section>
@endsection
