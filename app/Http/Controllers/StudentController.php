<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    

        return view('student.index',
         [
            'title' => 'Student',
            'students' => Student::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create', ['title' => 'Create Student']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'nim' => 'required|numeric|digits:12',
            ],

            [
                'name.required' =>'Nama Wajib Di Input',
                'nim.required' =>'Nim Wajib Di Input',
                'nim.numeric' =>'Nim Wajib Berupa Anggka',
                'nim.digits' =>'Nim Wajib 12 Digit',
            ]

         );
 
    Student::create($validated);
 
    return redirect('/student');
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
}
