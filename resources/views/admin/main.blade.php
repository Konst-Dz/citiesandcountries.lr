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
                        <td><a href={{ url('admin/edit/'.$show->id) }}>{{ __('messages.edit') }}</a></td>
                        <td>
                            <form action="admin\delete\{{$show->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="delete-post-{{ $show->id }}" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>{{ $destroy }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @endforeach
        @endforeach
            </table>

@endsection
