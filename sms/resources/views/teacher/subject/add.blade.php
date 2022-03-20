@extends('master.teacher.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    <h4 class="card-title mb-4">Add Subject Form</h4>

                    <form action="{{route('new-subject')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Subject Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Subject Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Subject Fee</label>
                            <div class="col-sm-9">
                                <input type="number" name="fee" class="form-control" id="horizontal-password-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="short_description" class="form-control summernote" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea name="long_description" class="form-control summernote" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" accept="image/*"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Subject</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
