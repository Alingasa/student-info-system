<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check())
        {
            $totalStudents = Student::count();
            $totalUsers = User::count();
            $totalTeachers = Teacher::count();
            $totalPaid = Payment::sum('paid');
            $totalPayable = Payment::sum('payable');
            $totalRefund = Payment::sum('refund');
            $totalFees = Enrollment::sum('fee');
            // dd($totalPayments);
            $studenttables = Student::latest()->paginate(50);
            $enrollments = Enrollment::with(['subject', 'course', 'student', 'teacher'])->get();
           if(Auth::user()->role == "Teacher")
           {
            return view('dashboard.teacherdashboard.teacher_dashboard',compact('totalStudents','totalUsers','totalTeachers','studenttables'));
           }  elseif(Auth::user()->role == "Student")
           {
            return view('dashboard.studentdashboard.student_dashboard',compact('totalStudents','totalUsers','totalTeachers','studenttables'));
           }
        }

      
        
        return view('dashboard.index', compact('totalStudents','totalUsers','totalTeachers','studenttables','enrollments','totalPaid','totalPayable','totalRefund','totalFees'))->with('i', (request()->input('page', 1) - 1) * 5);
        return redirect()->route('login')->with('error', 'Invalid credentials or unauthorized access.');
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
}
