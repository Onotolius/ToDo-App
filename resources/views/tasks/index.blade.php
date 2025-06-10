@extends('layout.app')
@section('title', 'Список Задач: ')
@section('content')
    @forelse($tasks as $task)
        <li><a href="{{route('task.show'), ['id' => $task->id]}}">{{$task->title}}</a></li>
    @empty
        <h2>Список задач пуст !</h2>
    @endforelse
@endsection
<a href="{{route('task.create')}}">Создать задачу</a>
