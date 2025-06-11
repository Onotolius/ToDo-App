@extends('layout.app')
@section('title', 'Редактировать задачу')
@section('content')
    <form action="{{ route('tasks.update', $task->id) }}" method="POST"
          class="bg-white p-6 rounded shadow max-w-xl mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Задача</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}"
                   class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Описание</label>
            <textarea name="description" id="description" rows="3"
                      class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
        </div>
        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
            Обновить
        </button>
    </form>
@endsection
