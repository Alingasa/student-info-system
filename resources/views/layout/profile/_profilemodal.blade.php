



  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel"> 
              <i class="fas fa-solid fa-users"></i>
                        Profile</h3>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
              </button>
          </div>
          <div class="modal-body"><center> @if(Auth::user()->avatar)
            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile Picture" style="width: 120px;" class="img-profile rounded-circle">
        @else
            <img src="{{ asset('my_dashboard/img/undraw_profile.svg') }}" alt="Default Profile Picture" style="width: 80px;" class="img-profile rounded-circle">
        @endif 
         <h3>  {{ucwords(Auth::user()->firstname . " " .Auth::user()->lastname)}}  </h3>
      
            {{-- <form enctype="multipart/form-data" action="" method="POST">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <input type="submit" class="btn btn-sm btn-primary"> --}}
            </form>
         </center>
          <p></p>
            <div class="card-header">
                <th>Role : </th>
                <td>

                    @if(Auth::user()->role == 'Admin')
                    <span class="badge badge-warning">{{Auth::user()->role }}</span>
                     @elseif(Auth::user()->role == 'Teacher')
                     <span class="badge badge-danger">{{ Auth::user()->role }}</span>
                    @else
                    <span class="badge badge-secondary">{{ Auth::user()->role }}</span>
                  @endif
                </td>
               
                       </div>
                       

            <div class="card-header">
             <th>ID :</th>
                      <td>
                        {{Auth::user()->user_id}}
                        </td> 
                    </div>
                        {{-- <div class="card-header">
                            <th>First Name :

                            <td> {{ Auth::user()->firstname }}</td> 
                            </th>
                                    
                                </div>

                                <div class="card-header">
                                    <th>Last Name :

                                        {{ Auth::user()->lastname }}
                                    </th>
                                            
                                        </div> --}}

                                       <div class="card-header">
                                        <th>Email : {{Auth::user()->email}}</th>
                                                  
                                               </div>
                
                                               <div class="card-header">
                                                <th>Status :
                                                    @if (Auth::user()->status == 'Active')
                                                    <td style="color: green;">{{ Auth::user()->status }}</td>
                                                @else
                                                    <td style="color: red;">{{ Auth::user()->status }}</td>
                                                @endif

                                                </th>
                                                
                                                       </div>
                                               <br>
                                               {{-- @if(auth()->user()['role'] == 'Admin')
                                               <p style="padding-left: 25vh;">
                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                                </p> --}}
                                                    {{-- @endif
                                               @if(auth()->user()['role'] == 'Student' || auth()->user()['role'] == 'Teacher') --}}
                                                     <p style="padding-left: 17vh;">

                                            
                                                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                                                    
                                                     
                                                        <a href="{{ route('admin.edit', Auth::user()->id) }}" class="btn btn-outline-danger" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"></path>
                                                        </svg>
                                                            Edit Profile
                                                          </a> 
                                                          {{-- @endif --}}
                                                     </p>
                </div>
               
            </div>











        
    
          
          
          
          
          
          
          </div>
         
          {{-- <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div> --}}
      </div>
  </div>
</div>

</div>