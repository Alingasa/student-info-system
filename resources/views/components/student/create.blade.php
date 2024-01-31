@extends('dashboard.homedashboard.home')

@section('content')
     <div class="card">
        <div class="card-header">
            Add new Student <br>
          
        </div>
       
@if ($errors->any())
@include('layout.error')
@endif

<form action="{{ route('student.store') }}" method="POST">
@csrf

 <div class="row">
    </div>
 
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name</strong>
            <input type="text" name="firstname" class="form-control" placeholder="First Name">
        </div>
    </div>
       
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name</strong>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong for="status">Status</strong>       
            <select  class="form-control" name="status" id="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select>
        </div>
       
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="role">Role</strong>
                <select  class="form-control" name="role" id="role">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    </select>
            </div>
   </div> --}}
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>  <a class="btn btn-danger btn-sm" href="{{ route('student.index') }}">Cancel</a>
       
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