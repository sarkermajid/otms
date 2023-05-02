@extends('website.master')


@section('title')
    Training Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>{{ isset($courses[0]->category) ? $courses[0]->category->name.' Training Course' : 'No Course Available' }} </h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($courses as $course)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{ asset($course->image) }}" alt="" class="">
                            <div class="card-body">
                                <h4><a href="{{ route('training.detail',['id'=>$course->id]) }}" class="text-decoration-none text-dark">{{ $course->title }}</a></h4>
                                <p class="mb-0">Price: {{ $course->fee }}</p>
                                <p>Starting Date: {{ $course->starting_date }}</p>
                                <hr/>
                                <a href="{{ route('training.detail',['id'=>$course->id]) }}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
