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
                <h1 class="text-white">Notices</h1>
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

                    <div class="">
                        <div class="row">
                            @foreach($notices as $notice)
                            <div class="d-flex align-items-center gap-3">
                                <div class="p-3 bg-warning rounded">
                                    <span class="text-white text-[46px] font-bold notice-card-wrapper">29</span>
                                    <span class="text-white text-xl font-bold">September</span>
                                </div>
                                <div class="">
                                    <h5 class="text-[#515151] text-[19px] font-[600] pb-4">{{$notice->title}}</h5>
                                    <span class="text-[#515151] text-sm pb-5">created by MBSTU</span>
                                    <p class="text-sm text-[#515151]">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="info-bx text-center">
                                        <h5><a href="{{route('frontend.notice.details' , $notice->id)}}">{{$notice->title}}</a></h5>
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
                            </div> -->
                            @endforeach
                        </div>
                        @if(count($notices) == 0)
                        <div class="col-md-12 heading-bx text-center">
                            <h2 class="title-head text-uppercase m-b0">Alert <br /> <span> There is no notice at the moment..!</span></h2>
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