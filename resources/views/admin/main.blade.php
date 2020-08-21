@extends('layouts.app')
@section('title','Админка')

@section('content')

       <section>
           <b><a href="/admin/add/">Добавить новую запись</a></b>
       </section><br>
            @foreach($country as $value)
                @foreach($value->city as $item)
                    @foreach($value->showplace as $show)
            <table>
                    <tr>
                          <td>{{ $show->name }}</td>
                         <td>{{ $show->desc }}</td>
                        <td>{{ $item->name }}</td>
                          <td>{{$value->name}}</td>
                        <td><a href="/admin/edit/{{$show->id}}">Редактировать</a></td>
                        <td><a href="/admin/delete/{{$show->id}}">Удалить</a></td>
                    </tr>
                @endforeach
                @endforeach
        @endforeach
            </table>

@endsection
