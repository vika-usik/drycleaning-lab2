@extends('layouts.app')

@section('title', 'Перегляд послуги')

@section('content')
    <h1>Деталі послуги</h1>

    <div class="card p-3">
        <h3>{{ $service->name }}</h3>
        <p><strong>Ціна:</strong> {{ $service->price }} грн</p>
        <p><strong>Опис:</strong> {{ $service->description }}</p>
    </div>

    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary mt-3">
        Назад
    </a>
@endsection