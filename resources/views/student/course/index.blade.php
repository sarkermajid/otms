@extends('website.master')


@section('title')
    Student Course
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>My All Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('student.dashboard') }}" class="nav-link">My Dashboard</a></li>
                            <li class="list-group-item"><a href="" class="nav-link">My Profile</a></li>
                            <li class="list-group-item"><a href="{{ route('student.all-course') }}" class="nav-link">My Courses</a></li>
                            <li class="list-group-item"><a href="" class="nav-link">Change Password</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Course Title</th>
                                <th>Starting Date</th>
                                <th>Enroll Status</th>
                                <th>Payment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('training.detail',['id'=>$enroll->course_id]) }}" class="text-decoration-none text-dark" target="_blank">{{ $enroll->course->title }}</a></td>
                                <td>{{ $enroll->course->starting_date }}</td>
                                <td>{{ $enroll->enroll_status }}</td>
                                <td>{{ $enroll->payment_status }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
