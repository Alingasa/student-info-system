@extends('dashboard.homedashboard.home')

@section('content')
     <div class="card">
        <div class="card-header">
            Add new Course <br>
          
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

<form action="{{ route('course.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
   
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <select  class="form-control" name="name" id="name">
                <option value="BSIT">BSIT</option>
                <option value="BSED-SS">BSED-SS</option>
                <option value="BSED-MATH">BSED-MATH</option>
                <option value="BEED">BEED</option>
                
                </select>
        </div>
    </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="name">Course</strong>
                <input type="text" name="name" class="form-control" placeholder="Course">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="role">Description</strong>
                <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="duration">Duration</strong>
            <select  class="form-control" name="duration" id="duration">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                
                </select>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('course.index') }}">Cancel</a>
       
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
            
       
    </div>
    </div>
   
   
 </div>
</div>
</form>
    </div> 

 

@endsection 