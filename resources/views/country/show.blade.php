@extends('layouts.app')
@section('title',$title)

@section('content')
    <section>
        @foreach($cities as $value)

            <a href="/{{$slug}}/{{$value->name}}/">{{$value->name}}</a><br>

        @endforeach
    </section>
@endsection
