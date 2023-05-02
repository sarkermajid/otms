@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">{{ $student->name }} Details Information</h4>
                    <p class="card-title-desc">{{ Session::get('message') }}</p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Student Id</th>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{ $student->mobile }}</td>
                        </tr>
                        <tr>
                            <th>National Id Number</th>
                            <td>{{ $student->nid }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ asset($student->image) }}" alt="{{ $student->name }}" height="150" width="200"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $student->address }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $student->status == 1 ? 'Active' : 'Inactive' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"> {{ $student->name }} All Courses Information</h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Course Title</th>
                            <th>Course Fee</th>
                            <th>Teacher Info</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student->enrolls as $enroll)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enroll->course->title }}</td>
                                <td>{{ $enroll->course->fee }}</td>
                                <td>{{ $enroll->course->teacher->name.'('.$enroll->course->teacher->mobile.')' }}</td>
                                <td>{{ $enroll->payment_status }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
