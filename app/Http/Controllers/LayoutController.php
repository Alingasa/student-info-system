<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     

            $totalStudents = Student::count();
            $totalUsers = User::count();
            $totalTeachers = Teacher::count();
            $totalAdmins = DB::table('users')->where('role', 'Admin')->count();
            $totalPaid = Payment::sum('paid');
            $totalPayable = Payment::sum('payable');
            $totalRefund = Payment::sum('refund');
            $totalFees = Enrollment::sum('fee');
            $studenttables = Student::simplePaginate(5);
            $enrollments = Enrollment::with(['subject', 'course', 'student', 'teacher'])->simplePaginate(5);
     
        return view('dashboard.index', compact('totalStudents','totalUsers','totalTeachers','totalAdmins','studenttables','enrollments','totalPaid','totalPayable','totalRefund','totalFees'))->with('i', (request()->input('page', 1) - 1) * 5);
       
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
