<?php
  
namespace App\Http\Controllers;
  
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $adminUsers = User::latest()->get();

        foreach ($adminUsers as $admin) {
            // Check if the current role is 'Student'
            $isTeacher = $admin->role === 'Teacher';
        
            // Check if a Tea$isTeacher record already exists for the user
            $existingTeacher = Teacher::where('user_id', $admin->id)->first();
        
            if ($isTeacher && !$existingTeacher) {
                // Create a new student record
                $teacher = new Teacher([
                    'user_id' => $admin->id,
                    'teacher_id' => $admin->user_id,
                    'firstname' => $admin->firstname,
                    'lastname' => $admin->lastname,
                    'email' => $admin->email,
                    'status' => $admin->status,
                    // Add other fields as needed
                ]);
        
                $teacher->save();
            } elseif (!$isTeacher && $existingTeacher) {
                // If the role changed and there is an existing Teacher record, delete it
                $existingTeacher->delete();
            } elseif ($isTeacher && $existingTeacher) {
                // If the role is 'Teacher' and an existing Teacher record exists, update it
                $existingTeacher->update([
                    'teacher_id' => $admin->user_id,
                    'firstname' => $admin->firstname,
                    'lastname' => $admin->lastname,
                    'email' => $admin->email,
                    'status' => $admin->status,
                    // Add other fields as needed
                ]);
            }
        }
        $teacher = Teacher::latest()->get();
        
        return view('components.teacher.index',compact('teacher'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('components.teacher.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'teacher_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'status' => 'required',
        ]);
        
        Teacher::create($request->all());
         
        return redirect()->route('teacher.index')
                        ->with('success','Teacher Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher): View
    {
        return view('components.teacher.show',compact('teacher'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher): View
    {
        return view('components.teacher.edit',compact('teacher'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher): RedirectResponse
    {
        $request->validate([
            'teacher_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'status' => 'required',
        ]);
        
        $teacher->update($request->all());
        
        return redirect()->route('teacher.index')
                        ->with('success','Teacher updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher): RedirectResponse
    {
        $teacher->delete();
         
        return redirect()->route('teacher.index')
                        ->with('delete','Teacher deleted successfully');
    }
}