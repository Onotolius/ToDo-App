@extends('layout.app')
@section('title')
    <h2>{{$task->title}}</h2>
@endsection
@section('content')
    <div class="bg-white max-w-2xl mx-auto p-6 rounded shadow">
        <p class="text-lg mb-4">
            {{ $task->description ?? 'У задачи нет описания' }}
        </p>

        <div class="flex gap-2 mb-4">
            <form action="{{ route('tasks.done', $task->id) }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                    Сделано
                </button>
            </form>

            <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                    Удалить
                </button>
            </form>
        </div>

        <a href="{{ url('/') }}"
           class="text-blue-600 hover:underline inline-block">
            На главную!
        </a>
    </div>
@endsection
