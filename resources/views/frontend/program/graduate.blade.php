@extends('layouts.frontend.app')

@section('styles')
<style>
    /* .show{
        color: white;
        background-color: yellow;
    } */
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
                <h1 class="text-white">Graduate</h1>
            </div>
        </div>
    </div>
    <div role="tabpanel">

    <div class="p-[30px]">
        <!-- card heading -->
        <div class="mb-[30px]">
        <p class="text-[30px] font-bold py-[30px]">Department of Information and Communication Technology</p>
        <div class="shadow-lg rounded p-[30px] w-full 2xl:w-1/2">
            <div class="flex items-center gap-[30px]">
            <div class="text-xl">FACULTY</div>
            <div class="w-[1px] h-5 bg-gray-600"></div>
            <div class="text-xl">DURATION</div>
            </div>
            <div class="flex items-center gap-[30px] mt-4">
            <div class="text-lg">Engineering</div>
            <div class=""></div>
            <div class="text-lg text-gray-600">2 years</div>
            </div>
           
        </div>

        </div>
    <ul class="nav  nav-justified mt-[60px]" role="tablist">
    <li role="presentation" class="active">
  <a class="text-xl  border p-4" href="#home" aria-controls="home" role="tab" data-toggle="tab">
    OVERVIEW
</a>
</li>
    <li role="presentation">
  <a class="text-xl  border p-4" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
    CURRICULAM & COURSES
</a>
</li>
    <li role="presentation">
  <a class="text-xl  border p-4" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
      ALL SYLLABUS
  </a>
</li>
       
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
<div class="col-md-9 col-xs-12"> 
    <div class="p-[30px]">
    <p class="pb-2.5 text-lg font-semibold"> Program Overview </p>
    <p class="text-base">Data not available</p>
    </div>

</div>

</div>
    <div role="tabpanel" class="tab-pane" id="profile">
<div class="col-md-9 col-xs-12">
<div class="p-[30px]">
    <p class="pb-2.5 text-lg font-semibold"> CURRICULAM & COURSES </p>
    <p class="text-base">Course data not available</p>
    </div>
</div>
      
</div>
    <div role="tabpanel" class="tab-pane" id="settings">
<div class="col-md-9 col-xs-12">
<div class="p-[30px]">
    <p class="pb-2.5 text-lg font-semibold"> Program Description </p>
    <p class="text-base">Program description not available</p>
    </div>
</div> 
    </div>

   

<!-- Nav tabs -->


<!-- Tab panes -->
      
</div>      
</div>

</div>

    <!-- Breadcrumb row -->
   
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
   
@endsection

@section('scripts')
@endsection