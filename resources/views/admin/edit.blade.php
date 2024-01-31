@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit User
        </div>
    
    @if ($errors->any())
    @include('layout.error')
@endif

<form action="{{ route('admin.update', $Admin->id) }}" enctype="multipart/form-data"  method="POST">
    @csrf
    @method('PUT')

     <div class="row">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Current Avatar</strong>
            <br>
            @if($Admin->avatar)
            <img src="{{ asset('storage/' . $Admin->avatar) }}" alt="Current Profile Picture" style="width: 100px;" class="img-profile rounded-circle">
            @else
                <img src="{{ asset('my_dashboard/img/undraw_profile.svg') }}" alt="Default Profile Picture" style="width: 80px;" class="img-profile rounded-circle">
            @endif
        </div>
        
<div class="form-group">
    
    <strong>Choose Avatar</strong>
    <br>
    <input type="file" name="avatar" class="form-control-file" >

 
        </div>
          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="role">Role</strong>
                <select  class="form-control" name="role" id="role">
                    
                    <option value="Admin" {{ ($Admin->role == "Admin") ? 'selected' : ''}}>Admin</option>
                    <option value="Student" {{ ($Admin->role == "Student") ? 'selected' : ''}}>Student</option>
                   <option value="Teacher" {{ ($Admin->role == "Teacher") ? 'selected' : ''}}>Teacher</option>
                
                    
                    </select>
          
        </div>
       @if(auth()->user()->role == "Student" || auth()->user()->role == "Teacher")
       <div class="form-group">
        <strong>User Id</strong>
        <input type="text" name="user_id" value="{{ $Admin->user_id }}" class="form-control" placeholder="User Id" readonly>
    </div>
</div>
       @else
        <div class="form-group">
            <strong>User Id</strong>
            <input type="text" name="user_id" value="{{ $Admin->user_id }}" class="form-control" placeholder="User Id">
        </div>
       
    </div>
    @endif
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name</strong>
                <input type="text" name="firstname" value="{{ $Admin->firstname }}" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name</strong>
                <input type="text" name="lastname" value="{{ $Admin->lastname }}" class="form-control" placeholder="Last Name">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" value="{{ $Admin->email }}" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <strong for="status">Status</strong>
           
                <select  class="form-control" name="status" id="status">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    
                    </select>
          
        </div>
        <div class="form-group">
          
            <button type="button" id="togglePasswordFields" class="btn btn-link">Change Password</button>
        </div>
        
        <div class="form-group" id="passwordFields" style="display:none">
            <strong>Password</strong>
            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{$Admin->password}}" autocomplete="new-password">
        
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group" id="confirmPasswordFields" style="display:none">
            <strong>Confirm Password</strong>
            <input id="password-confirm" type="text" class="form-control" placeholder="Confirm Password" value="{{$Admin->password}}" name="password_confirmation" autocomplete="new-password">
        </div>
        
        <script>
            document.getElementById('togglePasswordFields').addEventListener('click', function() {
                var passwordFields = document.getElementById('passwordFields');
                var confirmPasswordFields = document.getElementById('confirmPasswordFields');
        
              
        
                if (passwordFields.style.display === 'none') {
                    passwordFields.style.display = '';
                    confirmPasswordFields.style.display = '';
        
                    // Change input type to text
                    passwordInputs.forEach(function(input) {
                        input.type = 'text';
                    });
                } else {
                    passwordFields.style.display = 'none';
                    confirmPasswordFields.style.display = 'none';
        
                    // Change input type back to password
                    passwordInputs.forEach(function(input) {
                        input.type = 'password';
                    });
                }
            });
        </script>
        
  

        <div class="form-group">
                
        </div>
        
            
      @if(auth()->user()->role == "Student" || auth()->user()->role == "Teacher" )
      <a class="btn btn-danger btn-sm" href="{{url('http://localhost:8000/dashboard')}}"   >Cancel</a> 
      @else
            <a class="btn btn-danger btn-sm" href="{{ route('admin.index') }}">Cancel</a> 
            @endif
            <button type="submit" class="btn btn-primary btn-sm">Submit</button> 
            <div class="form-group">
                
        </div>
        
   

        </div>
        </div>
        
      
        

</form>


    
@endsection

 
   
   