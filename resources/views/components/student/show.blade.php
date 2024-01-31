<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Document</title>
    <link href="{{ asset('my_dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Custom styles for this template-->
    <link href="{{ asset('my_dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        /* Additional styling for printing */
        @media print {
            body {
                margin: 0;
                padding: 0;
                line-height: 1.4;
                font-size: 12px;
            }

            .card {
                border: none;
                box-shadow: none;
            }

            .card-header, .card-body {
                border-bottom: 1px solid #ddd;
            }

            th, td {
                border: 1px solid #ddd;
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
       
            
       
            <div class="row">
                @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12">
                        <i class="fas fa-solid fa-users"></i>
                        Students
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

                            <td class="text-danger">{{ $students->student_id }}</td>

                            <td>{{ $students->firstname }}</td>
                            <td>{{ $students->lastname }}</td>
                            <td>{{ $students->email }}</td>
                            <td>
                                @if($students->status == 'Active')
                                    <p class="text-success">{{ $students->status }}
                                    </p>
                                @else
                                    <p class="text-secondary">{{ $students->status }}
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
                            <td class="text-danger">{{ Auth::user()->user_id}}</td>
                            <td>{{ Auth::user()->firstname}}</td>
                            <td>{{ Auth::user()->lastname}}</td>
                            <td>{{ Auth::user()->email}}</td>
                            <td>
                                @if($students->status == 'Active')
                                    <p class="text-success">{{ $students->status }}
                                    </p>
                                @else
                                    <p class="text-secondary">{{ $students->status }}
                                </p>
                                @endif
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        // Use JavaScript to trigger print dialog on page load
        window.onload = function () {
            window.print();
            window.onafterprint = function () {
                window.close(); // Close the print window after printing
            };
        };
    </script>
</body>
</html>
