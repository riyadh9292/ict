@extends('layouts.frontend.app')

@section('styles')
<style>
    /* .notices-banner {
        background-image: url("{{ asset('assets/images/banner/banner3.jpg') }}")
    } */
</style>
@endsection

@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <!-- <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);"> -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"></h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Notice</li>
                <li>Details</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row d-flex flex-row-reverse">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="courses-post">
                            <div class="ttr-post-info">
                                <div class="ttr-post-title ">
                                    <h2 class="post-title">{{$notice->title}}</h2>
                                </div>
                                <div class="ttr-post-text text-justify">
                                    <p>Published : {{$notice->created_at}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="" id="reviews">
                            <h4>Details</h4>

                            <div class="review-bx">
                                <p class="text-justify">{{$notice->description}}</p>
                            </div>
                        </div>

                        <div class="" id="reviews">
                            <h4>Downloadable File</h4>

                            <div class="review-bx">
                                @if($notice->file_path)
                                <a href="{{route('notice.download' , $notice->id)}}" class="btn">Download</a>
                                @else
                                <span>No file to Download</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
@endsection

@section('scripts')
@endsection