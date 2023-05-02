@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Enroll Information</h4>
                    <p class="card-title-desc">{{ Session::get('message') }}</p>
                    <form action="{{ route('admin.update-enroll-status',['id'=>$enroll->id]) }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Course Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $enroll->course->title }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Enroll Status</label>
                            <div class="col-md-9">
                                <select class="form-control" required  name="enroll_status">
                                    <option value="" disabled selected> -- Enroll Status -- </option>
                                    <option value="Pending" {{ $enroll->enroll_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Processing" {{$enroll->enroll_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$enroll->enroll_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                    <option value="Cancel" {{$enroll->enroll_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Enroll Status</label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Update enroll status">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
