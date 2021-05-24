@extends('layouts.frontend.app')

@section('content')
<div class="page-content bg-white">
    <!-- Page Heading Box ==== -->
    <div class="page-banner ovbl-dark">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Mission & Vision</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Mission & Vision</li>
            </ul>
        </div>
    </div>
    <!-- Page Heading Box END ==== -->
    <!-- Page Content Box ==== -->
    <div class="content-block">
        <!-- About Us ==== -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-b30">
                        <h2 class="title-head ">Vision of the Department</h2>
                        <p class="text-justify">The vision of the Department of the Information and Communication Technology, Mawlana Bhashani Science and Technology University is to establish itself as a center of excellence with all of the human resources (Faculty Members, Students, and Staffs) to facilitate innovation through research and academic programs and thus be internationally recognized for the sustainable transformation of the society.</p>
                        <a href="{{ route('frontend.contact') }}" class="btn button-md">Contact Us</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="{{asset('assets/images/icon/icon1.png')}}" alt="" /></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Complex Challenges</h5>
                                        <p>To equip the students to face the complex challenges in the 21st century and beyond</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="{{asset('assets/images/icon/icon2.png')}}" alt="" /></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Human Resource</h5>
                                        <p>To guide the student to develop themselves with ethical and moral values</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="{{asset('assets/images/icon/icon3.png')}}" alt="" /></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Lifelong Learners</h5>
                                        <p>To prepare the students as lifelong learners</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="feature-container">
                                    <div class="feature-md text-white m-b20">
                                        <a href="#" class="icon-cell"><img src="{{asset('assets/images/icon/icon4.png')}}" alt="" /></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="ttr-tilte">Leadership Skill</h5>
                                        <p>To enrich leadership skill inside our students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us END ==== -->
        <!-- Why Choose ==== -->
        <div class="section-area bg-gray section-sp2 choose-bx">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-bx text-center">
                        <h2 class="title-head text-uppercase m-b0">Mission <span> of the Department</span></h2>
                        <p>The overall mission is to educate students and prepare themselves for competitive careers in industries and academia with the support of top-notch learning tools and technology-oriented environments. In specific, we aim at the following:</p>
                    </div>
                </div>
                <div class="row choose-bx-in">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="service-bx">
                            <div class="action-box">
                                <img src="{{asset('assets/images/mission.png')}}" alt="">
                            </div>
                            <div class="info-bx text-center">
                                <div class="feature-box-sm radius bg-white">
                                    <i class="fa fa-bank text-primary"></i>
                                </div>
                                <h6><a href="#">To produce graduates who can render their valuable service to society by leveraging the knowledge and skills.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="service-bx">
                            <div class="action-box">
                                <img src="{{asset('assets/images/mission.png')}}" alt="">
                            </div>
                            <div class="info-bx text-center">
                                <div class="feature-box-sm radius bg-white">
                                    <i class="fa fa-book text-primary"></i>
                                </div>
                                <h6><a href="#">To conduct innovative research in the related discipline and contribute to the body of knowledge to the field.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service-bx m-b0">
                            <div class="action-box">
                                <img src="{{asset('assets/images/mission.png')}}" alt="">
                            </div>
                            <div class="info-bx text-center">
                                <div class="feature-box-sm radius bg-white">
                                    <i class="fa fa-cogs text-primary"></i>
                                </div>
                                <h6><a href="#">To sustain a feasible network among government and non-government agencies and communities.</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
</div>
@endsection

@section('scripts')
@endsection