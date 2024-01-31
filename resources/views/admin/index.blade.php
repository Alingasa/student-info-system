@extends('dashboard.homedashboard.home')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <i class="fas fa-solid fa-users"></i>
                    Users
                    <input type="text" id="searchBar" class="form-control" style="width: 250px" placeholder="Search">
                </div>
                <div class="col-md-6 col-12 text-right">
                    <a href="{{ route('admin.create') }}" class="btn btn-sm btn-primary">Add User</a>
                </div>
            </div>
        </div>

       

       

        <div class="table-responsive">
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped mb-0" id="myDataTable">
                    <table class="table table-bordered">
                        <tr>
                            @if(auth()->user()['role'] == 'Admin')
                                <th>No</th>
                            @endif
                            <th>Role</th>
                            <th>Avatar</th>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($Admin as $admin)
                            <tr class="user-row">
                                @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                                    <td>{{ ++$i }}</td>
                                @endif
                                <td>
                                    @if($admin->role == 'Admin')
                                        <span class="badge badge-success">{{ $admin->role }}</span>
                                    @elseif($admin->role == 'Teacher')
                                        <span class="badge badge-danger">{{ $admin->role }}</span>
                                    @else
                                        <span class="badge badge-secondary">{{ $admin->role }}</span>
                                    @endif
                                </td>
                                <td>
                                    <center>
                                        @if($admin->avatar)
                                            <img src="{{ asset('storage/' . $admin->avatar) }}" alt="Profile Picture" style="width:40px;" class="img-profile rounded-circle">
                                        @else
                                            <img src="{{ asset('my_dashboard/img/undraw_profile.svg') }}" alt="Default Profile Picture" style="width: 40px;" class="img-profile rounded-circle">
                                        @endif
                                    </center>
                                </td>
                                <td class="text-danger">{{$admin->user_id ?? 'User ID not availabe'}}</td>
                                <td>{{ ucwords($admin->firstname) . ' ' . ucwords($admin->lastname)}}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    @if ($admin->status == 'Active')
                                        <p class="text-success">{{ $admin->status }}</p>
                                    @else
                                        <p class="text-danger">{{ $admin->status }}</p>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#deleteModal_{{ $admin->id }}" >Delete</a>
                                        @include('admin.modal.deletemodal', ['admin' => $admin])
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </table>
                <nav aria-label="...">
                    <ul class="pagination"> 
                        {{ $Admin->links() }}
                    </ul>
                </nav>
            </div>
        </div>
        @include('admin.script.scriptjs')
        @include('layout._footer')
    </div>
    
@endsection
