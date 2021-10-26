<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
        $students = Student::latest()->paginate(20);
        return view('students.index', compact('students'))
        ->with('i', (request()->input('page',1)-1)*20);
    }

    public function create()
    {
        return view('students.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'spécialité'=> 'required', 
            'sexe'=> 'required',
            'note_fin_formation'=> 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
        ->with('success', 'Etudiant ajouté');
    }

  
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

   
    public function update(Request $request, Student $student)
    {
        $request->validate([

        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
        ->with('success', 'Informations modifiées avec succès');
    }

   
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
        ->with ('success', 'Etudiant supprimé avec succès');
    }
}
