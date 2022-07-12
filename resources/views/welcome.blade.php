@extends('layouts.app')

@php
$endpoint = "/api";
$get = "primary";
$post = "success";
$put = "info";
$delete = "danger";
@endphp

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1>Sample API</h1>
            <p>
                Welcome to the sample API. This is a simple example of how to use the API and confirmed to work with
                <span>Axios</span>.<br />
                Due to the CORS policy, you must access this API from only <span
                    class="bg-secondary text-white p-1 rounded">http://localhost:3000</span>.<br />
            </p>
            <p>
                To get started, you can use the following endpoints:
            </p>
            {{-- Users --}}
            <div class="bg-light border p-3 mb-3">
                <h2>Users</h2>
                <ul class="m-0 p-0 list-style-none">
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}/users">{{ $endpoint }}/users</a>
                        Get all users
                    </li>
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}/users/1">{{ $endpoint }}/users/{id}</a>
                        Get a user by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $post }}">POST</span>
                        <a href="{{ $endpoint }}/users">{{ $endpoint }}/users</a>
                        Create a new user
                    </li>
                    <li>
                        <span class="badge bg-{{ $put }}">PUT</span>
                        <a href="{{ $endpoint }}/users/1">{{ $endpoint }}/users/{id}</a>
                        Update a user by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $delete }}">DELETE</span>
                        <a href="{{ $endpoint }}/users/1">{{ $endpoint }}/users/{id}</a>
                        Delete a user by ID
                    </li>
                </ul>
            </div>
            {{-- Posts --}}
            <div class="bg-light border p-3 mb-3">
                <h2>Posts</h2>
                <ul class="m-0 p-0 list-style-none">
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/posts</a>
                        Get all posts
                    </li>
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/posts/{id}</a>
                        Get a post by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $post }}">POST</span>
                        <a href="{{ $endpoint }}/posts">{{ $endpoint }}/posts</a>
                        Create a new post
                    </li>
                    <li>
                        <span class="badge bg-{{ $put }}">PUT</span>
                        <a href="{{ $endpoint }}/posts/1">{{ $endpoint }}/posts/{id}</a>
                        Update a post by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $delete }}">DELETE</span>
                        <a href="{{ $endpoint }}/posts/1">{{ $endpoint }}/posts/{id}</a>
                        Delete a post by ID
                    </li>
                </ul>
            </div>
            {{-- Comments --}}
            <div class="bg-light border p-3 mb-3">
                <h2>Comments</h2>
                <ul class="m-0 p-0 list-style-none">
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/comments</a>
                        Get all comments
                    </li>
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/comments/{id}</a>
                        Get a comment by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $post }}">POST</span>
                        <a href="{{ $endpoint }}/comments">{{ $endpoint }}/comments</a>
                        Create a new comment
                    </li>
                    <li>
                        <span class="badge bg-{{ $put }}">PUT</span>
                        <a href="{{ $endpoint }}/comments/1">{{ $endpoint }}/comments/{id}</a>
                        Update a comment by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $delete }}">DELETE</span>
                        <a href="{{ $endpoint }}/comments/1">{{ $endpoint }}/comments/{id}</a>
                        Delete a comment by ID
                    </li>
                </ul>
            </div>
            {{-- Todos --}}
            <div class="bg-light border p-3 mb-3">
                <h2>Todos</h2>
                <ul class="m-0 p-0 list-style-none">
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/todos</a>
                        Get all todos
                    </li>
                    <li>
                        <span class="badge bg-{{ $get }}">GET</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/todos/{id}</a>
                        Get a todo by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $post }}">POST</span>
                        <a href="{{ $endpoint }}/todos">{{ $endpoint }}/todos</a>
                        Create a new todo
                    </li>
                    <li>
                        <span class="badge bg-{{ $put }}">PUT</span>
                        <a href="{{ $endpoint }}/todos/1">{{ $endpoint }}/todos/{id}</a>
                        Update a todo by ID
                    </li>
                    <li>
                        <span class="badge bg-{{ $delete }}">DELETE</span>
                        <a href="{{ $endpoint }}/todos/1">{{ $endpoint }}/todos/{id}</a>
                        Delete a todo by ID
                    </li>
                </ul>
            </div>
            {{-- System --}}
            <div class="bg-light border p-3 mb-3">
                <h2>System</h2>
                <ul class="m-0 p-0 list-style-none">
                    <li>
                        <span class="badge bg-primary">POST</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/databases/reset</a>
                        Truncate all tables.
                    </li>
                    <li>
                        <span class="badge bg-primary">POST</span>
                        <a href="{{ $endpoint }}">{{ $endpoint }}/databases/seed</a>
                        Seed the database with dummy data.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
