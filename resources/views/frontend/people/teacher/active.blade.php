@extends('layouts.frontend.app')

@section('styles')
<style>
    .people {
        width: 100% !important;
        height: 300px !important;
    }

    .status {
        padding-top: 14px !important;
    }
</style>
@endsection

@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">People</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">People</a></li>
                <li>Faculty Member</li>
                <li>Active</li>
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
                            @foreach($users as $user)
                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        @if($user->profile_photo_path)
                                        <img class="people" src="{{ $user->profile_photo_url }}" alt="">
                                        @else
                                        <img src="{{asset('assets/images/user.png')}}" alt="">
                                        @endif
                                        <!-- <a href="#" class="btn">Read More</a> -->
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5>{{$user->name}}</h5>
                                        <h6>{{$user->designation}}</h6>
                                        <span>Email: {{$user->email}}</span>
                                        <br><span>Phone: {{$user->phone}}</span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review status">
                                            <span class="text-capitalize">{{$user->status}}</span>
                                        </div>
                                        <div class="review">
                                            <a class="btn float-right" href="{{route('frontend.teacher.profile' , $user)}}">Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @if(count($users) == 0)
                            <div class="col-md-12 heading-bx text-center">
                                <h2 class="title-head text-uppercase m-b0">Alert <br /> <span> There is no active faculty members at the moment..!</span></h2>
                            </div>
                            @endif
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