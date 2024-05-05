@extends('layouts.app')

@section('content')

<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a href="{{ route('admin.books.index') }}" class="nav-link">Books</a></li>
    <li class="nav-item"><a href="{{ route('admin.genres.index') }}" class="nav-link">Genres</a></li>
    <li class="nav-item"><a href="{{ route('admin.authors.index') }}" class="nav-link">Authors</a></li>
    <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link">Users</a></li>
    <li class="nav-item"><a href="{{ route('admin.appeals.index') }}" class="nav-link">Appeals</a></li>
</ul>

@endsection