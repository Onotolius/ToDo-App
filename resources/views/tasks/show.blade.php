@extends('layout.app')
@section('title')
    <h2>{{$task->title}}</h2>
@endsection
@section('content')
    @if($task->description)
        <p>Описание: {{$task->description}}</p>
    @else
        <p>У задачи нет описания</p>
    @endif
    <button type="submit">Сделано</button>
    <button type="submit">Удалить</button>
@endsection
