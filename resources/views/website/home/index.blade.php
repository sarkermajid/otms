@extends('website.master')


@section('title')
    Best Online Training System In Bangladesh
@endsection

@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            @foreach($offer_courses as $key => $offer_course)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset($offer_course->image) }}" class="w-100" height="500" alt="">
                <div class="carousel-caption my-caption">
                    <h3>{{ $offer_course->title }}</h3>
                    <h5>Offer Starting Date: {{ $offer_course->starting_date }}</h5>
                    <p>Price: {{ $offer_course->fee }} BDT</p>
                    <a href="" class="btn btn-dark px-5">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($recent_courses as $course)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset($course->image) }}" alt="" class="">
                        <div class="card-body">
                            <h4><a href="{{ route('training.detail',['id'=>$course->id]) }}" class="text-decoration-none text-dark">{{ $course->title }}</a></h4>
                            <p class="mb-0">TK.{{ $course->fee }}</p>
                            <p>Starting Date: {{ $course->starting_date }}</p>
                            <hr/>
                            <a href="{{ route('training.detail',['id'=>$course->id]) }}" class="custom-btn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="custom-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="custom-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/s1.jpg" alt="" class="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="custom-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
