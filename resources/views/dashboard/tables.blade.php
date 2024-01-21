<div class="container-fluid">

 
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">Enrolled</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                   
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                            @if (count($enrollments) > 10)
                        <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                    @endif
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                      <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 195.2px;">Enrollment Id</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 296.2px;">Full Name</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Course</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141.2px;">Subject Enrolled</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66.2px;">Fees</th>

                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120.2px;">Enrolled Date</th></tr>
                  </thead>
            
                  <tbody>
                    {{-- @foreach ($enrollments as $sitem) --}}
                    @foreach($enrollments as $enrollment)
                    <tr class="user-row">
                        <td style="color: red">{{$enrollment->enrollment_no}}</td>
                      <td>{{ $enrollment->student->firstname . ' ' . $enrollment->student->lastname}}</td>
                      @if($enrollment->course->name == "BSIT")
                      <td style="color:orange">  
                          
                     {{$enrollment->course->name}}
                      </td>
                      @elseif($enrollment->course->name == "BSED-SS")
                      <td style="color:gray">  
                          
                        {{$enrollment->course->name}}
                         </td>
                         @elseif($enrollment->course->name == "BSED-SS")
                         <td style="color:gray">  
                             
                           {{$enrollment->course->name}}
                            </td>
                            @elseif($enrollment->course->name == "BSED-MATH")
                            <td style="color:purple">  
                                
                              {{$enrollment->course->name}}
                               </td>
                               @else
                               <td style="color:blue">  
                                   
                                 {{$enrollment->course->name}}
                                  </td>
                      @endif
                        <td>
                        {{$enrollment->subject->name}}
                            </td>
                            <td>
                                {{$enrollment->fee}}
                                    </td>
                                    <td>{{$enrollment->join_date}}</td>
                     
                    </tr>
                    @endforeach
                 
              </table></div></div>
        
          </div>
      </div>
  </div>

</div>
@include('dashboard.script.scriptjs')