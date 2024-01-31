<?php
  
namespace App\Http\Controllers;
  
use App\Models\Admin;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $course = Course::simplepaginate(5);
        
        return view('components.course.index',compact('course'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('components.course.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:courses',
            'description' => 'required',
           
        ]);
        
        Course::create($request->all());
         
        return redirect()->route('course.index')
                        ->with('success','Course Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Course $course): View
    {
        return view('components.course.show',compact('course'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course): View
    {
        return view('components.course.edit',compact('course'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
          
        ]);
        
        $course->update($request->all());
        
        return redirect()->route('course.index')
                        ->with('success','Course updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();
         
        return redirect()->route('course.index')
                        ->with('delete','Course deleted successfully');
    }
}