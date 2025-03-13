@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">Students Index</h1>
@endsection


@section('content')
    <div class="container mx-auto mt-4">
        <h1 class="text-4xl font-bold text-center mb-6 text-black">Students List</h1>
        <input type="text" id="search" class="form-input mt-1 block w-full" placeholder="Search Students">
        <ul id="students-list" class="mt-4">
          
        </ul>
    </div>
@endsection
