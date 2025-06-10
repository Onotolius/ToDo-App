@extends('layout.app')
@section('title', 'Список Задач: ')
@section('content')
    @forelse($tasks as $task)
        <li><a href="{{route('tasks.show')}}">{$task->title}}</a></li>
    @empty
        <h2>Список задач пуст !</h2>
    @endforelse
@endsection
