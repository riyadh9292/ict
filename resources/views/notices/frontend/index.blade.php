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
                <h1 class="text-white"></h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Notices</li>
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
                            @foreach($notices as $notice)
                            <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="info-bx text-center">
                                        <h5><a href="{{route('notice.details' , $notice->id)}}">{{$notice->title}}</a></h5>
                                        <span>Click on the title to read more</span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span>Published: {{$notice->created_at}}</span>
                                        </div>
                                        <div class="price">
                                            @if($notice->file_path)
                                            <a href="{{route('notice.download' , $notice->id)}}" class="btn">Download</a>
                                            @else
                                            <span>No file to Download</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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