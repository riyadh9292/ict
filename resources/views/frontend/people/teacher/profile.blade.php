@extends('layouts.frontend.app')

@section('styles')
<style>
    .pb-30 {
        padding-bottom: 30px !important;
    }
</style>
@endsection

@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Profile</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>People</li>
                <li>Faculty Member</li>
                <li>Profile</li>
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
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="profile-bx text-center">
                            <div class="user-profile-thumb">
                                <img src="{{ $user->profile_photo_url }}" alt="" />
                            </div>
                            <div class="profile-info">
                                <h4>{{$user->name}}</h4>
                                <h5>{{$user->designation}}</h5>
                                @php
                                    $education = $user->education;
                                    $education_array = explode (";", $education); 
                                @endphp
                                @foreach($education_array as $education)
                                    <span>{{$education}}</span><br>
                                @endforeach
                                <span>{{$user->email}}</span>
                                @if($user->secondary_email)
                                <br><span>{{$user->secondary_email}}</span>
                                @endif
                                @if($user->phone)
                                <br><span>{{$user->phone}}</span>
                                @endif
                            </div>
                            <div class="profile-social">
                                <ul class="list-inline m-a0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                        <div class="profile-content-bx">
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <div class="profile-head">
                                        <h3>Bio</h3>
                                    </div>
                                    <div class="courses-filter pb-30">
                                        <div class="clearfix text-justify">
                                            @if($user->bio)
                                            <span>{{$user->bio}}</span>
                                            @else
                                            <span>No Bio Available</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 heading-bx text-center">
                    <h2 class="title-head text-uppercase m-b0">Research Articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            @foreach($user->articles as $article)
                            <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="info-bx text-center">
                                        <p>{{$article->authors}}, "{{$article->title}}", {{$article->publisher}}, {{$article->details}}, {{$article->year}}. DOI: {{$article->doi}}, URL: {{$article->url}}</p>
                                        <!-- <span></span> -->
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span>Uploaded: {{$article->created_at}}</span>
                                        </div>
                                        <div class="review">
                                            <span>Uploaded By: {{$article->author->name}}</span>
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