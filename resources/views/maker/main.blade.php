
@extends('layouts.app')
@section('title','Главная страница')

@section('content')
    <section>
        @foreach($country as $value)

            <a href="/{{$value->slug}}/">{{$value->name}}</a><br>

        @endforeach
        {{ $country->appends(['sort' => 'votes'])->fragment('foo')->links() }}
    </section>
@endsection
