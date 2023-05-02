@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Course Offer Update Form</h4>
                    <p class="text-center text-success h4">{{ Session::get('message') }}</p>
                    <form action="{{ route('admin.course.offer-create',['id'=>$course->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-name-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-name-input" value="{{ $course->title }}" name="title" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-actual-input" class="col-sm-3 col-form-label">Actual Fee</label>
                            <div class="col-sm-9">
                                <input type="number" id="horizontal-actual-input" value="{{ $course->fee }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-offer-input" class="col-sm-3 col-form-label">Offer Fee</label>
                            <div class="col-sm-9">
                                <input type="number" id="horizontal-offer-input" name="offer_fee" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-offer-image-input" class="col-sm-3 col-form-label">Offer Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-offer-image-input" name="image">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-offer-date-input" name="offer_date" class="col-sm-3 col-form-label">Offer Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="horizontal-offer-date-input" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create Course Offer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
