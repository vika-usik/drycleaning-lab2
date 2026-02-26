@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <h1>Каталог послуг</h1>

    <div class="row">
        <x-card title="Чистка пальта" price="300 грн" />
        <x-card title="Чистка костюма" price="250 грн" />
        <x-card title="Чистка сукні" price="200 грн" />
    </div>
@endsection