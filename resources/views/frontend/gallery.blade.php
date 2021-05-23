@extends('layouts.frontend.app')

@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Gallery</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1 gallery-bx">
            <div class="container">
                <div class="feature-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        @foreach($albums as $album)
                        <li data-filter="{{$album->id}}" class="btn active">
                            <input type="radio">
                            <a href="#"><span>{{$album->title}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                        @foreach($albums as $album)
                        @foreach($album->photos as $photo)
                        <li class="action-card col-lg-3 col-md-4 col-sm-6 {{$album->id}}">
                            <div class="ttr-box portfolio-bx">
                                <div class="ttr-media media-ov2 media-effect">
                                    <a href="javascript:void(0);">
                                        <img src="{{$photo->path}}" alt="">
                                    </a>
                                    <div class="ov-box">
                                        <div class="overlay-icon align-m">
                                            <a href="{{$photo->path}}" class="magnific-anchor" title="Title Come Here">
                                                <i class="ti-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-info-bx bg-primary">
                                            <h4><a href="#">{{$photo->album->title}}</a></h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>

@endsection

@section('scripts')
@endsection