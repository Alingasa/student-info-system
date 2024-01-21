<?php
  
namespace App\Http\Controllers;
  
use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
  
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
           
        $adminUsers = User::latest()->get();

foreach ($adminUsers as $admin) {
    // Check if the current role is 'Student'
    $isStudent = $admin->role === 'Student';

    // Check if a student record already exists for the user
    $existingStudent = Student::where('user_id', $admin->id)->first();

    if ($isStudent && !$existingStudent) {
        // Create a new student record
        $student = new Student([
            'user_id' => $admin->id,
            'student_id' => $admin->user_id,
            'firstname' => $admin->firstname,
            'lastname' => $admin->lastname,
            'email' => $admin->email,
            'status' => $admin->status,
            // Add other fields as needed
        ]);

        $student->save();
    } elseif (!$isStudent && $existingStudent) {
        // If the role changed and there is an existing student record, delete it
        $existingStudent->delete();
    } elseif ($isStudent && $existingStudent) {
        // If the role is 'Student' and an existing student record exists, update it
        $existingStudent->update([
            'student_id' => $admin->user_id,
            'firstname' => $admin->firstname,
            'lastname' => $admin->lastname,
            'email' => $admin->email,
            'status' => $admin->status,
            // Add other fields as needed
        ]);
    }
}

          if(auth()->user()['role'] != 'Admin' ||auth()->user()['role'] != 'Teacher' ) {
            $student = Student::latest()->paginate(1);
        }

        $student = Student::latest()->get();
        return view('components.student.index',compact('student'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('components.student.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'student_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'status'  => 'required',
        ]);
        
        Student::create($request->all());
         
        return redirect()->route('student.index')
                        ->with('success','Student Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
    {
        return view('components.student.show',compact('student'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student): View
    {
        return view('components.student.edit',compact('student'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student): RedirectResponse
    {
        $request->validate([
            'student_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'status' => 'required',
        ]);
        
        $student->update($request->all());
        
        return redirect()->route('student.index')
                        ->with('success','Student updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        
        $student->delete();
         
        return redirect()->route('student.index')
                        ->with('delete','student deleted successfully');
    }
}