<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubjectController extends Controller
{
    public function index(): View
    {
        $subject = Subject::simplePaginate(1);
        $course = Subject::with(['course'])->get();
        return view('components.subject.index',compact('subject','course'))
                    ->with('i', (request()->input('page', 1) - 1) * 1);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {  $course = Course::pluck('name','id');
        return view('components.subject.create',compact('course'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'course_id' => 'required',
            'year' => 'required',
            'start_date' => 'required',
            
        ]);
        
        Subject::create($request->all());
         
        return redirect()->route('subject.index')
                        ->with('success','Subject Added successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Subject $subject): View
    {
        return view('components.subject.show',compact('subject'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject): View
    {
        $course = Course::pluck('name','id');
        return view('components.subject.edit',compact('subject','course'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject): RedirectResponse
    {
        $request->validate([
            
            'course_id' => 'required',
            'year' => 'required',
            'start_date' => 'required',
            
        ]);
        
        $subject->update($request->all());
        
        return redirect()->route('subject.index')
                        ->with('success','Subject updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject): RedirectResponse
    {
        $subject->course()->dissociate();
        $subject->save();
        $subject->delete();
         
        return redirect()->route('subject.index')
                        ->with('delete','Subject deleted successfully');
    }
}
