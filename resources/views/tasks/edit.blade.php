@extends('layout.app')
@section('title', 'Редактировать задачу')
@section('content')
    <form action="{{route('tasks.update', $task->id)}}" method="POST">
        <div>
            @csrf
            @method('PUT')
            <label for="title">Задача: </label>
            <input type="text" name="title" id="title" value="{{old('title', $task->title)}}"/>
            <label for="description">Описание: </label>
            <textarea name="description" id="description" rows="3">{{old('description', $task->description)}}</textarea>
            <button type="submit">Отправить</button>
        </div>
    </form>
@endsection
