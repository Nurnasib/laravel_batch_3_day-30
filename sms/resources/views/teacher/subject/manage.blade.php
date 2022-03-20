@extends('master.teacher.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-success">{{Session::get('message')}}</h4>
                    <h4 class="card-title">Manage Subject</h4>

                    <div class="table-responsive">
                        <table class="table table-light mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Fee</th>
                                <th>Teacher Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->code}}</td>
                                    <td>{{number_format($course->fee)}}</td>
                                    <td>{{$course->teacher->name}}</td>
                                    <td>{{$course->status == 1? 'Active': 'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('edit-teacher',['id'=>$course->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('delete-teacher',['id'=>$course->id])}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
