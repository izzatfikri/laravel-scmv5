<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lecturers = Lecturer::where('college_id')->get();
        //$students = \App\Models\Student::all();
        $lecturers = Lecturer::all();
        return view('lecturers.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = \App\Models\Subject::all();
        return view('lecturers.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required',
        'staffNo'=>'required',
        'email'=>'required',
        'subject_id'=>'required']);
        Lecturer::create($request->all());
        return redirect()->route('lecturers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {   
        $subjects = \App\Models\Subject::all();
        return view('lecturers.edit', compact('lecturer', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate(['name'=>'required',
        'staffNo'=>'required',
        'email'=>'required',
        'subject_id'=>'required']);
        $lecturer->update($request->all());
        return redirect()->route('lecturers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect()->route('lecturers.index')->with("Lecturer deleted successfully");
    }
}
