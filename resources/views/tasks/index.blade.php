@extends('layout.app')
@section('title', 'Список Задач: ')
@section('content')
    @forelse($tasks as $task)
        <li><a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a></li>
    @empty
        <h2>Список задач пуст !</h2>
    @endforelse
    <a href="{{route('tasks.create')}}">Создать задачу</a>
@endsection
