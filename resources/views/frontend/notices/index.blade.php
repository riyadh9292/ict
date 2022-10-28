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
    <div class="content-block 2xl:px-[60px]">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">

                    <div class="">
                            @foreach($notices as $notice)                        
                
                            <div  class="flex items-start pl-[15px] pr-[30px] py-[20px] rounded-[20px] gap-[28px] shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                                <div class="py-[32px] px-[17px] bg-[#FFB600] rounded-[30px] flex flex-col justify-center">
                                    <span class="text-white text-center text-[46px] font-bold">{{$notice->created_at??28}}</span>
                                    <span class="text-white text-xl font-bold">September</span>
                                </div>
                                <div class="w-full flex items-center justify-between pt-2">
                                    <div class="w-[75%]">
                                    <h5 class="text-[#515151] text-[19px] font-[600] pb-2">{{$notice->title}}</h5>
                                    <p class="text-[#515151] text-sm mb-3">created by MBSTU</p>
                                    <p class="text-sm text-[#515151]">{{$notice->description}}</p>
                                    <div class="pt-4"><a class="text-[#FFB600] text-sm hover:underline"  href="{{route('frontend.notice.details' , $notice->id)}}">View Details

                                    </a>
                                   </div>
                                </div>
                                    @if($notice->file_path)
                                            <a href="{{route('notice.download' , $notice->id)}}" class="btn">                                   <img title="download" class="w-[71px] h-[71px] cursor-pointer" src="{{ asset('assets/images/notice/download.png') }}" alt="" />
</a>
                                            @else
                                            <span>                                    <img title="download" class="w-[71px] h-[71px] cursor-pointer" src="{{ asset('assets/images/notice/download.png') }}" alt="" />
</span>
                                            @endif

                                </div>

                            </div>
                            
                            @endforeach
                       
                        @if(count($notices) == 0)
                        <div class="col-md-12 heading-bx text-center">
                            <h2 class="title-head text-uppercase m-b0">Alert <br /> <span> There is no notice at the moment..!</span></h2>
                        </div>
                        @endif
                    </div>
                
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
@endsection

@section('scripts')
@endsection