@extends('layout.app')

@section('title', 'Список Задач: ')

@section('content')
    <div class="mb-6">
        <div class="flex gap-4">
            <a href="/?filter=done" class="text-blue-600 hover:underline">Сделанные</a>
            <a href="/?filter=undone" class="text-blue-600 hover:underline">Не сделанные</a>
            <a href="/" class="text-blue-600 hover:underline">Все</a>
        </div>
    </div>

    <ul class="space-y-4">
        @forelse($tasks as $task)
            <li class="flex justify-between items-center bg-white p-4 rounded shadow">
                <a href="{{ route('tasks.show', $task->id) }}"
                   class="text-lg font-medium hover:underline {{ $task->is_done ? 'line-through text-gray-400' : ''  }}">
                    {{ $task->title }}
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('tasks.edit', $task->id) }}"
                       class="bg-amber-400 hover:bg-amber-500 text-white text-sm px-3 py-1 rounded">
                        Изменить
                    </a>
                    <form action="{{ route('tasks.done', $task->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="bg-green-600 hover:bg-green-700 text-white text-sm px-3 py-1 rounded">
                            Сделано
                        </button>
                    </form>
                    <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">
                            Удалить
                        </button>
                    </form>
                </div>
            </li>
        @empty
            <h2 class="text-xl text-gray-700">Список задач пуст!</h2>
        @endforelse
    </ul>

    <div class="mt-6 flex gap-4">
        <a href="{{ route('tasks.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Создать задачу
        </a>
        <a href="/" class="text-blue-600 hover:underline">На главную</a>
    </div>
@endsection
