@extends('layouts.master')
@section('content')
    <!-- SHOWCASE SECTION -->
    <section id="about-page">
        <div class="container">
            <div class="row center">
                <div class="col-lg-6">
                    <div class="course-img">
                        <img src="{{"/storage/uploads/$course->img"}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-details">
                        <h1>{{$course->title}}</h1>
                        <p>{{$course->description}}
                        </p>
                        <a href="{{$course->pdf_link}}" class="start-course">START COURSE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection