<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
 


    
  




    public function search(Request request)
    {
        $query = $request->input('q');
        $students = Student::where('name', 'like', "%{$query}%")->get();
        return response()->json($students);
    }




    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->input('q');
            $students = Student::where('name', 'like', "%{$query}%")->get();
            return response()->json($students);
        }

        $students = Student::all();
        return view('students.index', compact('students'));
    }




}

