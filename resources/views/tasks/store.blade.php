@extends('layout.app')
@section('title', 'Создать задачу')
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <label for="title">Задача: </label>
    <input type="text" name="title" id="title" value="{{old('title')}}"/>
    <label for="title">Описание: </label>
    <textarea name="description" id="description" rows="3">{{old('description')}}</textarea>
    <button type="submit">Отправить</button>
</form>
