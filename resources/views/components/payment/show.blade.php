@extends('dashboard.homedashboard.home')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Course</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger btn-sm" href="{{ route('course.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                {{ $course->name }}
            </div>
            <div class="form-group">
                <strong>Description</strong>
                {{ $course->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Email:</strong>
              {{ $course->duration() }}
          </div>
      </div>
    </div>
@endsection