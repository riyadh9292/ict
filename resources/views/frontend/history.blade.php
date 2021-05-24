@extends('layouts.frontend.app')

@section('content')
<div class="page-content">
    <!-- Page Heading Box ==== -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">History</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>History</li>
            </ul>
        </div>
    </div>
    <!-- Page Heading Box END ==== -->
    <!-- Page Content Box ==== -->
    <div class="content-block">
        <!-- Our Story ==== -->
        <div class="section-area bg-gray section-sp1 our-story">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-5 col-md-12 heading-bx">
                        <h2 class="m-b10">Our History</h2>
                        <!-- <h5 class="fw4">It is a long established fact that a reade.</h5> -->
                        <p class="text-justify">The Department of Information and Communication Technology (ICT) was established in Mawlana Bhashani Science and Technology University (MBSTU) by the approval of Bangladesh University Grand Commission (BUGC) under the Faculty of Computer Science and Engineering (CSE) on 28th January 2003.

                            Initially the Department offers the degree of B.Sc (Engg.) in ICT and the formal inaugural of academic activity of the Department commissioned on 26th October 2003 with 02(two) teachers and 40 students in the session of 2003-2004.

                            Till today, ICT Department has produced around 100 graduates who have established a good reputation in different IT sectors in home and abroad. In this session it started conducting classes for the 7th batch on 9th January 2010.

                            Currently there are 250 students are studying in different semesters. The Department is located on 12,500 sq. ft. of space on the south side of the second floor of the New Academic Building, MBSTU.</p>
                        <a href="{{ route('frontend.contact') }}" class="btn">Contact Us</a>
                    </div>
                    <div class="col-lg-7 col-md-12 heading-bx p-lr">
                        <div class="video-bx">
                            <img src="{{ asset('assets/images/slider/slide1.jpg') }}" alt="" />
                            <!-- <a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i class="fa fa-play"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Story END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
</div>
@endsection

@section('scripts')
@endsection