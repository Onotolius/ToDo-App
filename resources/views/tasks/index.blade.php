@extends('layout.app')
@section('title', 'Список Задач: ')
@section('content')
    @forelse($tasks as $task)
        <li><a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a><a
                href="{{ route ('tasks.edit', ['id' => $task->id]) }}">Изменить</a>
            <form action="{{route('tasks.done', ['id' => $task->id])}}" method="POST">
                @csrf
                <button type="submit">Сделано</button>
            </form>
            <form action="{{route('tasks.delete', ['id' => $task->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
            <a href="{{'/'}}">На главную !</a>
        </li>
    @empty
        <h2>Список задач пуст !</h2>
    @endforelse
    <a href="{{route('tasks.create')}}">Создать задачу</a>
@endsection
