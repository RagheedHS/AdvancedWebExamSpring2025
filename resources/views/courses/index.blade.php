@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">Course List</h1>
@endsection


@section('content')
    <div class="container mx-auto mt-4">
        <h1 class="text-4xl font-bold text-center mb-6 text-black">Courses Management</h1>

        <div class="bg-white p-6 rounded shadow-md mb-6">
            <h2 class="text-2xl font-bold mb-4">Add New Course</h2>
            <form id="add-course-form" action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Course Name</label>
                    <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" class="form-textarea mt-1 block w-full" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Course</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Courses List</h2>
            <ul id="courses-list">
                @foreach ($courses as $course)
                    <li class="flex justify-between items-center p-2 border-b">
                        <span>{{ $course->name }}: {{ $course->description }}</span>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
