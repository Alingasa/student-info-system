@extends('dashboard.homedashboard.home')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Enrollment Application
    </div>

    @if ($errors->any())
    @include('layout.error')
@endif


    <form action="{{ route('enrollment.update', $enrollment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="course_id">Course</label>
                        <select class="form-control" name="course_id" id="course_id">
                            @foreach($course as $id => $name)
                                <option value="{{ $id }}" {{ $id == $enrollment->course_id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <select name="year" class="form-control">
                            @foreach(['1st', '2nd', '3rd', '4th'] as $option)
                                <option value="{{ $option }}" {{ $option == $enrollment->year ? 'selected' : '' }}>{{ $option }} year</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select name="semester" class="form-control">
                            <option value="First_Semester" {{ $enrollment->semester == 'First_Semester' ? 'selected' : '' }}>1st Semester</option>
                            <option value="Second_Semester" {{ $enrollment->semester == 'Second_Semester' ? 'selected' : '' }}>2nd Semester</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="student_id">Student</label>
                        <select class="form-control" name="student_id" id="student_id">
                            <option value="">Select Student</option>
                            @foreach($student as $id => $name)
                                <option value="{{ $id }}" {{ $id == $enrollment->student_id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="join_date">Enrolled Date</label>
                        <input type="date" name="join_date" class="form-control" value="{{ $enrollment->join_date }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="text" name="fee" class="form-control" value="{{ $enrollment->fee }}">
                    </div>
                </div>

                <!-- Add other form fields... -->

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <a class="btn btn-danger btn-sm" href="{{ route('enrollment.index') }}">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
