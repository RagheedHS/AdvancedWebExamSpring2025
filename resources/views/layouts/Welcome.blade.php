@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">Welcome to My Application</h1>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-4 flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-center mb-6 text-blue-600">Welcome to My Application</h1>
        <p class="mb-6 text-center">Manage students and courses easily.</p>
        <div class="flex space-x-4">
            <a href="{{ url('/students') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Manage Students</a>
            <a href="{{ url('/courses') }}" class="bg-green-500 text-white px-4 py-2 rounded">Manage Courses</a>
        </div>
    </div>
@endsection

