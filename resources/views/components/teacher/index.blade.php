@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="fas fa-solid fa-users"></i>
                        Teachers
                        @if (count($teacher) > 10)
                        <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                    @endif
                    </div>
            
                </div>
            </div>
            <div class="table-responsive">
              @if($teacher->count() > 0)
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
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
                  <table class="table table-bordered">
                      <tr>
                          <th>No</th>
                          <th>Role</th>
                          <th>Teacher ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          {{-- <th width="280px">Action</th> --}}
                      </tr>
                      @foreach ($teacher as $teachers)
                      <tr class="user-row">
                          <td>{{ ++$i }}</td>
                          <td>  
                            @if($teachers->role == 'Teacher')
                            <span class="badge badge-danger">{{ $teachers->role }}</span>
                          @else
                            <span class="badge badge-secondary">{{ $teachers->role }}</span>
                          @endif
                          <td class="text-danger">{{ $teachers->teacher_id ?? 'Teacher ID not available' }}</td>
                          <td>{{ $teachers->firstname }}</td>
                          <td>{{ $teachers->lastname }}</td>

                        
                          
                        </td>
                          <td>{{ $teachers->email }}</td>
                          <td> 
                            @if($teachers->status == 'Active')
                            <p class="text-success">{{ $teachers->status }}</p>
                          @else
                          <p class="text-secondary">{{ $teachers->status }}</p>
                          @endif
                          </td>
                          
                      </tr>
                      @endforeach
                  </table>
                  </table>
                  <nav aria-label="...">
                    <ul class="pagination">
                      
                      {{ $teacher->links() }}
                    </ul>
                  </nav>
                 
                  @if(isset($user_name))
                    <div class="alert alert-success mb-0">
                      <strong>Success!</strong> {{ $user_name }}'s information has been successfully updated.
                    </div>
                  @endif
                  @else
                  <br>
                  <center><h5 class="text-danger">No Available Data</h5></center>
                  @endif
            </div>
          </div>
       @include('components.teacher.searchjs.js')
@endsection
