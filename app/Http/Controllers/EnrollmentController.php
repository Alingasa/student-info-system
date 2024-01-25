<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = Enrollment::with(['subject', 'course', 'student', 'teacher'])->get();
        return view('components.enrollment.index',compact('enrollments'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $subject = Subject::pluck('name', 'id');
        $course = Course::pluck('name','id');
        $student = Student::select('firstname', 'lastname', 'id')->get()->mapWithKeys(function ($student) {
            return [ $student->id =>$student->firstname . ' ' . $student->lastname];
        });
        $teacher = Teacher::select('firstname', 'lastname', 'id')->get()->mapWithKeys(function ($teacher) {
            return [ $teacher->id =>$teacher->firstname . ' ' . $teacher->lastname];
        });
        
        return view('components.enrollment.create', compact('subject','course','student','teacher'));
     
        
    }
  
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
        
            'subject_id' => 'required',
            'course_id' => 'required',
            'student_id' => 'required|unique:enrollments',
            'teacher_id' => 'required',
            'join_date' => 'required',
            'fee' => 'required',
        ]);
        
        Enrollment::create($request->all());
        return redirect()->route('enrollment.index')
                        ->with('success','Enrollment Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment): View
    {
        return view('components.enrollment.show',compact('enrollment'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment): View
    {
        $subject = Subject::pluck('name', 'id');
        $course = Course::pluck('name','id');
        $student = Student::select('firstname', 'lastname', 'id')->get()->mapWithKeys(function ($student) {
            return [ $student->id =>$student->firstname . ' ' . $student->lastname];
        });
        $teacher = Teacher::select('firstname', 'lastname', 'id')->get()->mapWithKeys(function ($teacher) {
            return [ $teacher->id =>$teacher->firstname . ' ' . $teacher->lastname];
        });
        return view('components.enrollment.edit',compact('enrollment','subject','course','student','teacher'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollment): RedirectResponse
    {
        $request->validate([
          
            'subject_id' => 'required',
            'course_id' => 'required',
            'student_id' => 'required',
            'teacher_id' => 'required',
            'join_date' => 'required',
            'fee' => 'required',
        ]);
        
        $enrollment->update($request->all());
        
        return redirect()->route('enrollment.index')
                        ->with('success','Enrollment updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment): RedirectResponse
    {
        
        // Detach the relationships
        $enrollment->subject()->dissociate();
        $enrollment->course()->dissociate();
        $enrollment->student()->dissociate();
        $enrollment->teacher()->dissociate();
    
        // Save the changes to update the foreign keys to null
        $enrollment->save();
    
        // Delete the enrollment itself
        $enrollment->delete();
    
        return redirect()->route('enrollment.index')
                        ->with('delete', 'Enrollment deleted successfully');
    }
    
}
