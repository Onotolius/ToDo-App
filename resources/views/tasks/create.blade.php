@extends('layout.app')
@section('title', 'Создать задачу')
@section('content')
    <form action="{{route('tasks.store')}}" method="POST">
        <div>
            @csrf
            <label for="title">Задача: </label>
            <input type="text" name="title" id="title" value="{{old('title')}}"/>
            <label for="description">Описание: </label>
            <textarea name="description" id="description" rows="3">{{old('description')}}</textarea>
            <button type="submit">Отправить</button>
        </div>
    </form>
@endsection
