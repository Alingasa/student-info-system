<div class="container-fluid">

 
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-success">Subject Enrolled Details</h6>
      </div>
      <div class="card-body">
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
                      @if($enrollments->count() > 0)
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                      <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 195.2px;">Student ID</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 296.2px;">Full Name</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Course</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Year</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Semester</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66.2px;">Fees</th>

                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120.2px;">Enrolled Date</th></tr>
                  </thead>
            
                  <tbody>
                    {{-- @foreach ($enrollments as $sitem) --}}
                    @foreach($enrollments as $enrollment)
                    <tr class="user-row">
                      <td class="text-danger">{{ $enrollment->student->student_id }}</td>
                      <td>{{ $enrollment->student->firstname . ' ' . $enrollment->student->lastname}}</td>
                      @if($enrollment->course->name == "BSIT")
                      <td class="text-warning">  
                          
                     {{$enrollment->course->name}}
                      </td>
                      @elseif($enrollment->course->name == "BSED-SS")
                      <td class="text-muted">  
                          
                        {{$enrollment->course->name}}
                         </td>
                         @elseif($enrollment->course->name == "BEED")
                         <td class="text-info">  
                             
                           {{$enrollment->course->name}}
                            </td>
                            @elseif($enrollment->course->name == "BSED-MATH")
                            <td class="text-secondary">  
                                
                              {{$enrollment->course->name}}
                               </td>
                               @else
                               <td class="text-primary">  
                                   
                                 {{$enrollment->course->name}}
                                  </td>
                      @endif
                      <td>{{$enrollment->year. ' Year'}}</td>
                 
                     <td>{{$enrollment->semester}}</td>
                      
                            <td>
                                {{$enrollment->fee}}
                                    </td>
                                    <td>{{$enrollment->join_date}}</td>
                     
                    </tr>
                    @endforeach
             
              </table>
            </div></div>
              <nav aria-label="...">
                <ul class="pagination">
                    {{$enrollments->links()}}
                  </ul>
              </nav>
              @else
              <center>
                <h5 class="text-danger"> No Data Available</h5>
              </center>
              @endif
          </div>
      </div>
  </div>

</div>
@include('dashboard.script.scriptjs')