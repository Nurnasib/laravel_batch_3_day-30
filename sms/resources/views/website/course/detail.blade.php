@extends('master.front.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($subject->image)}}" alt="" class="w-100"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$subject->title}}</h1>
                        <p>Course Fee: {{$subject->fee}}</p>
                        <a href="{{route('enroll-now',['id'=>$subject->id])}}" class="btn btn-outline-success w-25 mx-auto"> Enroll Now </a>
                        <hr/>
                        <h2>Trainer Name: {{$subject->teacher->name}}</h2>
                        <img src="{{asset($subject->teacher->image)}}" height="100" width="100"/>
                        <hr/>
                        <div>{!! $subject->short_description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <h1>Course Module</h1>
                        <hr/>
                        <div>{!! $subject->long_description !!}</div>
                        <hr/>
                        <a href="" class="btn btn-outline-success w-25 mx-auto"> Enroll Now </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
