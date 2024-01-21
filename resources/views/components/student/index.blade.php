@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                  @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12">
                        <i class="fas fa-solid fa-users"></i>
                        Students
                        @if (count($student) > 10)
                        <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                    @endif
                    </div>
                    @else
                    <div class="col-md-6 col-12">
                      <i class="fas fa-solid fa-users"> </i>
                      Profile
                  </div>
                  @endif
                 
                </div>
            </div>
            <div class="card-body p-0">
                <table classs="table table-sm table-hover table-striped mb-0" id="myDataTable">
                   
              
                  <table class="table table-bordered">
                      <tr>
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <th>No</th>
                          @endif
                          <th>Role</th>
                          <th>Student ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Status</th>
                        
                      </tr>
                   
                      @foreach ($student as $students)
                      <tr class="user-row">
                        @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                          <td>{{ ++$i }}</td> 
                          <td>  
                            @if($students->role == 'Teacher')
                            <span class="badge badge-danger">{{ $students->role }}</span>
                          @else
                            <span class="badge badge-secondary">{{ $students->role }}</span>
                          @endif
                        </td>
                     

                          <td style="color:red;">{{ $students->student_id }}</td>
                          
                          <td>{{ $students->firstname }}</td>
                          <td>{{ $students->lastname }}</td>
                          <td>{{ $students->email }}</td>  
                          <td>
                            @if($students->status == 'Active')
                            <p style="color: green;">{{ $students->status }}
                            </p>
                            @else 
                            <p style="color: gray;">{{ $students->status }}
                              @endif 
                          </td>
                          @endif 

                          @if(auth()->user()['role'] == 'Student')
                          <td>  
                            @if($students->role == 'Teacher')
                            <span class="badge badge-danger">{{ $students->role }}</span>
                          @else
                            <span class="badge badge-secondary">{{ $students->role }}</span>
                          @endif
                        </td>
                          <td style="color:red;">{{ Auth::user()->user_id}}</td>
                          <td>{{ Auth::user()->firstname}}</td>  
                          <td>{{ Auth::user()->lastname}}</td>
                          <td>{{ Auth::user()->email}}</td>
                          <td>
                            @if($students->status == 'Active')
                            <p style="color: green;">{{ $students->status }}
                            </p>
                            @else 
                            <p style="color: gray;">{{ $students->status }}
                        
                          </p>
                          @endif
                          </td>
                          
                        @endif  
                        
                         
                      </tr>
                      @endforeach
                  </table>
                  </table>
                 
            </div>
          </div>
      @include('components.student.jsearch.js')
@endsection

 