@extends('layouts.app')
@section('title',$title)

@section('content')
    <section>
        <p>{{$showplace->name}}</p>
        <p>{{$showplace->desc}}</p>
    </section>
@endsection
