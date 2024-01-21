@extends('dashboard.homedashboard.home')

@section('content')
@include('components.subject.jsdatepicker.header')

     <div class="card">
        <div class="card-header">
            Add new Subjects <br>
          
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

<form action="{{ route('subject.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
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
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Started Date</strong>
            <input type="text" data-date-format="yyyy/mm/dd" id="datepicker" name="start_date" class="form-control" placeholder="Started Date">
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

 @include('components.subject.jsdatepicker.script')
@endsection 