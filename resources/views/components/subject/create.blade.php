@extends('dashboard.homedashboard.home')

@section('content')


     <div class="card">
        <div class="card-header">
            Add new Subjects <br>
          
        </div>
       
@if ($errors->any())
@include('layout.error')
@endif

<form action="{{ route('subject.store') }}" method="POST">
@csrf

 <div class="row">
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
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Year</strong>
            <select name="year" class="form-control">
                <option value="1st">1st year</option>
                <option value="2nd">2nd year</option>
                <option value="3rd">3rd year</option>
                <option value="4th">4th year</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Semester</strong>
            <select name="semester" class="form-control">
                <option value="First_Semester">1st Semester</option>
                <option value="Second_Semester">2nd Semester</option>
           
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Started Date</strong>
            <input type="date"  name="start_date" class="form-control @error('start_date') is-invalid @enderror" placeholder="Started Date">
            @error('start_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
     
     

        
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('subject.index') }}">Cancel</a>
       
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

@endsection 