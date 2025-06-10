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
    <form action="{{route('tasks.done', ['id' => $task->id])}}" method="POST">
        @csrf
        <button type="submit">Сделано</button>
    </form>
    <form action="{{route('tasks.delete', ['id' => $task->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить</button>
    </form>
    <div>
        <a href="{{'/'}}">На главную !</a>
    </div>
@endsection
