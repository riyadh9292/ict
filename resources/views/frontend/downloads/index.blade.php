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
    <div class="page-banner ovbl-dark notices-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Downloads</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Downloads</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            @foreach($downloads as $download)
                            <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="info-bx text-center">
                                        <h5>{{$download->title}}</h5>
                                        <span>{{$download->description}}</span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span>Published: {{$download->created_at}}</span>
                                        </div>
                                        <div class="price">
                                            @if($download->file_path)
                                            <a href="{{route('download' , $download->id)}}" class="btn">Download</a>
                                            @else
                                            <span>No file to Download</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(count($downloads) == 0)
                        <div class="col-md-12 heading-bx text-center">
                            <h2 class="title-head text-uppercase m-b0">Alert <br /> <span> There is no downloadable file at the moment..!</span></h2>
                        </div>
                        @endif
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