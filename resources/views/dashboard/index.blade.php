@extends('dashboard.homedashboard.home')
@section('content')

<div class="container-fluid">

  <!-- Page Heading -->

      @if(auth()->user()->role == 'Student' || auth()->user()->role == "Teacher")
      
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<br>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Welcome, {{ ucwords(auth()->user()->firstname) }}!</h6>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
         
                       
                                <div class="card-body">
                
                                    <!-- Unique Design Section -->
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="my_dashboard/img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    
                
                                    <!-- Educational Platform Description Section -->
                                    <p>At this school, we believe in the transformative power of education. We
                                        are dedicated to providing an enriching and empowering learning experience that goes beyond
                                        traditional boundaries. Our commitment is to nurture inquisitive minds, foster creativity, and
                                        prepare individuals for success in a rapidly evolving world.</p>
                
                                        <h5 class="mt-4 mb-3">Key Features:</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-check-circle text-success"></i> <strong>Innovative Learning:</strong>
                                                Embrace a dynamic and innovative approach to education that integrates cutting-edge technology
                                                with proven pedagogical methods.</li>
            
                                            <li><i class="fas fa-check-circle text-success"></i> <strong>Expert Instructors:</strong> Learn
                                                from passionate and experienced instructors who are dedicated to guiding students toward
                                                academic excellence and personal growth.</li>
            
                                            <!-- Add more list items for other key features -->
            
                                        </ul>
            
                                        <p class="mt-4">Join us and embark on a journey of discovery, growth, and success!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      @endif
    @if(auth()->user()->role == 'Admin')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   
  </div>
  <!-- Generate Report Modal -->
<div class="modal fade" id="generateReportModal" tabindex="-1" role="dialog" aria-labelledby="generateReportModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generateReportModalLabel">Choose Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add content for your report generation form or information here -->
            
                <!-- Add your form elements or content here -->
                <div class="form-group">
                    
                    <select class="form-control" id="teacherReport" name="teacherReport">
                        <option value="Student">Student Report</option>
                        <option value="Teacher">Teacher Report</option>
                        <option value="Course">Course Report</option>
                        <option value="Subject">Subjects Report</option>
                        <option value="Payment">Payments Report</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="generateBtn">Generate</button>
            </div>
        </div>
    </div>
</div>
{{-- end of modal --}}


  <div class="row">
    
<!-- Pending Requests Card Example -->

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$totalUsers}}</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="{{ $totalUsers }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-users"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Earnings (Monthly) Card Example -->
    
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Students
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$totalStudents}}</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="{{ $totalStudents}}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-solid fa-users"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Teachers
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$totalTeachers}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="{{ $totalTeachers}}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-solid fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Admin
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$totalAdmins}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="{{ $totalAdmins}}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-solid fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        </div>

        
   
               
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h5 mb-0 text-gray-800">Payments</h5>
                </div>
                <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left- shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                      Total Paid</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalPaid}}</div>
                 
                                </div>
                                
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-gray shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                   
                                
                                    <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                                      Total Payable</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalPayable}}</div>
                                    
                                
                                </div>
                                
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left- shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                      Total Refunds</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalRefund}}</div>
                                </div>
                                
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left- shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                      Total Fees</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalFees}}</div>
                                </div>
                                
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  
                
@include('dashboard.tables')
    

   
    
</div>

@endif



  @endsection