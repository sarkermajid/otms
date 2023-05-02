@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body bg-success">
                <h3 class="text-white">Total User</h3>
                <h6 class="text-white">{{ $totalUser }}</h6>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body bg-info">
                <h3 class="text-white">Total Teachers</h3>
                <h4 class="text-white">{{ $totalTeacher }}</h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body bg-primary">
                <h3 class="text-white">Total Students</h3>
                <h6 class="text-white">{{ $totalStudent }}</h6>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body bg-danger">
                <h3 class="text-white">Total Course</h3>
                <h6 class="text-white">{{ $totalCourse }}</h6>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body bg-warning">
                <h3 class="text-white">Total Category</h3>
                <h6 class="text-white">{{ $totalCategory }}</h6>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body bg-info">
                <h3 class="text-white">Enroll Course</h3>
                <h6 class="text-white">{{ $totalEnrollCourse }}</h6>
            </div>
        </div>
    </div>
@endsection
