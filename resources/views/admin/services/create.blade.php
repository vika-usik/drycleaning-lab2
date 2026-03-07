@extends('layouts.app')

@section('title', 'Додати послугу')

@section('content')

    <h1>Додати нову послугу</h1>

    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Назва</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Опис</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Ціна</label>
            <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success">Зберегти</button>

    </form>

@endsection