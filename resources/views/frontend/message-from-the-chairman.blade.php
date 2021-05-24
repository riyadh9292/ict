@extends('layouts.frontend.app')

@section('content')
<div class="page-content">
    <!-- Page Heading Box ==== -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Message from the Chairman</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Message from the Chairman</li>
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
                    <div class="col-lg-8 col-md-12 heading-bx">
                        <h2 class="m-b10">Message from the Chairman</h2>
                        <h5 class="fw4">Dr. Muhammad Shahin Uddin</h5>
                        <p class="text-justify">Welcome to the Department of Information and Communication Technology (ICT) which is one of the leading and prestigious departments of Mawlana Bhashani Science and Technology University (MBSTU). From the establishment of the University, the department has started its journey. And within a short period of time it has been able to produce undergraduate and graduate students who are excelling in various sectors like software development, communication sectors and in different government and non-government organizations etc. in home and abroad. Faculties are contributing in innovative research magnificently, and the department is getting recognition in the country for research contribution. The department provides a congenial environment for the growth of the students and helps them to achieve their goal by maintaining the requirements of 4the industrial revolution. The department also follows the pathways to meet the standards of Digital Bangladesh.</p>
                    </div>
                    <div class="col-lg-4 col-md-12 heading-bx p-lr">
                        <div class="video-bx">
                            <img src="{{ asset('assets/images/profile/chairman.jpg') }}" alt="" />
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