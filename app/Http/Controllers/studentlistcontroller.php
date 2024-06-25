<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_list;

class studentlistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_lists = student_list::all();
        return view ('student_lists.index')->with('student_lists', $student_lists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student_lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Student_list::create($input);
        return redirect('student_lists')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student_lists = student_list::find($id);
        return view('student_lists.show')->with('student_lists', $student_lists);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student_lists = student_list::find($id);
        return view('student_lists.edit')->with('student_lists', $student_lists);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student_lists = student_list::find($id);
        $input = $request->all();
        $student_lists->update($input);
        return redirect('student_lists')->with('flash_message', 'student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        student_list::destroy($id);
        return redirect('student_lists')->with('flash_message', 'Student deleted!');
    }
}
