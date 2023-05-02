@extends('website.master')

@section('title')
    Login / Registration
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Enroll</h3>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Congratulation your registration is complete, please check your mail for your login credential</h4>
                            <h4>Registration Current Status</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Enroll Status</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $enroll->course->title }}</td>
                                    <td>{{ $enroll->enroll_status }}</td>
                                    <td>{{ $enroll->payment_status }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
