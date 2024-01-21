@extends('dashboard.homedashboard.home')

@section('content')
@include('components.enrollment.jsdatepicker.header')
     <div class="card">
        <div class="card-header">
            Enrollment Application <br>
          
        </div>
       
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('enrollment.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Enrollment No</strong>
            <input type="text" name="enrollment_no" class="form-control" placeholder="Enrollment No">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {{-- <strong>Subject Id</strong>
            <input type="text" name="subject_id" class="form-control" placeholder="Subject Id"> --}}
            <strong>Subject</strong>
            <select  class="form-control" name="subject_id" id="subject_id">
                       @foreach($subject as $id=>$name)   
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
       
                
                </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course</strong>
            <select  class="form-control" name="course_id" id="course_id">
                       @foreach($course as $id=>$name)   
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
                </select>
        </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Student</strong>
            <select  class="form-control" name="student_id" id="student_id">
                       @foreach($student as $id=>$name)   
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
                </select>
        </div>
        </div> --}}
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student</strong>
                <input type="text" class="form-control" name="student_search" id="student_search" list="studentsList">
                <datalist id="studentsList">
                    @foreach($student as $id => $name)   
                        <option value="{{ $name }}" data-id="{{ $id }}">
                    @endforeach
                </datalist>
                <input type="hidden" name="student_id" id="selected_student_id">
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student</strong>
                <input type="text" class="form-control" name="student_search" id="student_search" list="studentsList">
                <datalist id="studentsList">
                    @foreach($student as $id => $name)   
                        <option value="{{ $name }}" data-id="{{ $id }}">
                    @endforeach
                </datalist>
                <input type="hidden" name="student_id" id="selected_student_id">
            </div>
        </div>
        
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teacher</strong>
                <select  class="form-control" name="teacher_id" id="teacher_id">
                           @foreach($teacher as $id=>$name)   
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                    </select>
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teacher</strong>
                <input type="text" class="form-control" name="teacher_search" id="teacher_search" list="teachersList">
                <datalist id="teachersList">
                    @foreach($teacher as $id => $name)   
                        <option value="{{ $name }}" data-id="{{ $id }}">
                    @endforeach
                </datalist>
                <input type="hidden" name="teacher_id" id="selected_teacher_id">
            </div>
        </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Join Date</strong>
                    <input type="text" name="join_date" class="form-control" placeholder="Join Date">
                </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Enrolled Date</strong>
                        <input type="text" data-date-format="yyyy/mm/dd" id="datepicker" name="join_date" class="form-control" placeholder="Enrolled Date">
                    </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Fee</strong>
                        <input type="text" name="fee" class="form-control" placeholder="Fee">
                    </div>
                  
        
      

        
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('enrollment.index') }}">Cancel</a>
       
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            
       
    </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
   
 </div>
</div>
</form>
    </div> 

 @include('components.enrollment.jsscript.jscript')
 
 @include('components.enrollment.jsteacher.jscript')

 @include('components.enrollment.jsdatepicker.script')
@endsection 