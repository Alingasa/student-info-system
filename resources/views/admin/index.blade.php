
@extends('dashboard.homedashboard.home')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       
                
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-solid fa-users"></i> Users
            </div>
          
            <div>
                <a href="{{ route('admin.create') }}" class="btn btn-sm btn-primary">Add New User</a>
            </div>
        </div>
        
      
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('delete'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
           
                      <div class="col-sm-12 col-md-6">
                          <div id="dataTable_filter" class="dataTables_filter">
                             
                          <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                  
                          </div>
                          <br>
                      </div>
                  </div>
                  <div class="row">
                
                      <div class="col-sm-12">
                          <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50.2px;">No</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50.2px;">Role</th>
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100.2px;">User ID</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 220.2px;">Full Name</th>
 
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66.2px;">Status</th>
  
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120.2px;">Action</th></tr>
                    </thead>
              
                    <tbody>
                  
                      @foreach($Admin as $admin)
                      <tr class="user-row">
                          <td>{{++$i}}</td>
                        <td>
                            @if($admin->role == 'Admin')
                                <span class="badge badge-success">{{ $admin->role }}</span>
                            @elseif ($admin->role == 'Teacher')
                                <span class="badge badge-danger">{{ $admin->role }}</span>
                            @else
                                <span class="badge badge-secondary">{{ $admin->role }}</span>
                            @endif
                        </td>
                        <td style="color: red">{{$admin->user_id}}</td>
                        <td>{{ $admin->firstname . ' ' . $admin->lastname}}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @if ($admin->status == 'Active')
                                <p style="color: green;">{{ $admin->status }}</p>
                            @else
                    <p style="color: red;">{{ $admin->status }}</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" >
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-sm btn-danger" href="#"  data-toggle="modal" data-target="#deleteModal" >Delete</a>
                                @include('admin.modal.deletemodal')
                            </form>
                        </td>
                       
                      </tr>
                      @endforeach
                   
                </table></div></div>
       
            </div>
        </div>
   
  
  </div>
  @include('admin.script.scriptjs')
  @endsection