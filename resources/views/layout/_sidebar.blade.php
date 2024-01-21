 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


      {{-- <div class="sidebar-brand-text mx-3" style="color: white;"><center><p style="font-size: 30px;">Admin</p></center> </div> --}}
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-20" style="padding-top: 50px;">
            {{-- <i class="material-symbols-outlined">
                account_circle
            </i> --}}

<p style="font-size: 25px;">
          {{-- {{ Auth::user()->role}}</p>  --}}
          {{-- @endif --}}
          @if(Auth::user()->role == 'Admin')
          <span class="badge badge-success">{{Auth::user()->role }}</span>
           @elseif(Auth::user()->role == 'Teacher')
           <span class="badge badge-danger">{{ Auth::user()->role }}</span>
          @else
          <span class="badge badge-secondary">{{ Auth::user()->role }}</span>
        @endif
        </div>
    </a>
    <br>
    {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
   
</a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                  <a class="nav-link" href="{{route('dashboard.index')}}">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span></a>
              </li>
          
  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#profileModal">
        <i class="fas fa-solid fa-users"></i>
        <span>Profile</span></a>
</li>
<hr class="sidebar-divider my-0">
  <!-- Heading -->
    <hr class="sidebar-divider">
  <div class="sidebar-heading">
      Components
  </div>
  @if(auth()->user()['role'] == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.index')}}">
        <i class="fas fa-solid fa-users"></i>
        <span>Users</span></a>
</li>
@endif

@if(auth()->user()['role'] == 'Student')
<li class="nav-item">
    <a class="nav-link" href="#"data-toggle="modal" data-target="#profileModal">
        <i class="material-symbols-outlined">
            group
            </i>
        <span>Profile</span></a>
       
</li>
@endif

<li class="nav-item">
    <a class="nav-link" href="{{ route('course.index')}}">
        <i class="material-symbols-outlined">
            list
            </i>
        <span>Courses</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('subject.index')}}">
        <i class="material-symbols-outlined">
            list
            </i>
        <span>Subjects</span></a>
</li>


@if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
<li class="nav-item">
    <a class="nav-link" href="{{ route('student.index')}}">
        <i class="material-symbols-outlined">
            group
            </i>
        <span>Students</span></a>
       
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('teacher.index')}}">
        <i class="material-symbols-outlined">
            group
            </i>
        <span>Teachers</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('enrollment.index')}}">
        <i class="material-symbols-outlined">
            post_add
            </i>
        <span>Enrollment</span></a>
</li>
@endif


@if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Student')
<li class="nav-item">
    <a class="nav-link" href="{{ route('payment.index')}}">
        <i class="material-symbols-outlined">
            attach_money
            </i>
        <span>Payment</span></a>
</li>
@endif

   <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>