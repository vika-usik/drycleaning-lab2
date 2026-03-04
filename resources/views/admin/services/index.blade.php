@extends('layouts.app')

@section('title', 'Адмін - Послуги')

@section('content')
    <h1>Список послуг</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Ціна</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->price }}</td>
                    <td>
                        <a href="{{ route('admin.services.show', $service) }}" class="btn btn-info btn-sm">Перегляд</a>

                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Видалити
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection