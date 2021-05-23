<header class="header rs-nav header-transparent">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <!-- <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li> -->
                        <li><a href="mailto:department.ict@mbstu.ac.bd"><i class="fa fa-envelope-o"></i>department.ict@mbstu.ac.bd</a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        @if(auth()->check() && auth()->user()->type == 'admin')
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        @elseif(auth()->check() && auth()->user()->type == 'teacher')
                        <li><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                        @elseif(auth()->check() && auth()->user()->type == 'officer')
                        <li><a href="{{ route('officer.dashboard') }}">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @endif
                        @php
                        $users = \App\Models\User::count();
                        @endphp
                        @if($users == 0)
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/MBSTU_Logo.png') }}" alt=""></a>
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Author Nav ==== -->
                <div class="secondary-menu">
                    <div class="secondary-inner">
                        <ul>
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                            <!-- Search Button ==== -->
                            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                        </ul>
                    </div>
                </div>
                <!-- Search Box ==== -->
                <div class="nav-search-bar">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span><i class="ti-search"></i></span>
                    </form>
                    <span id="search-remove"><i class="ti-close"></i></span>
                </div>
                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/MBSTU_Logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="#">General Information <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Programs<i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Undergraduate</a></li>
                                        <li><a href="#">Graduate</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">People <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Faculty Member<i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('frontend.people.teacher.active')}}">Active</a></li>
                                        <li><a href="{{route('frontend.people.teacher.onleave')}}">On Leave</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('frontend.people.officer')}}">Officer</a></li>
                                <li><a href="{{route('frontend.people.staff')}}">Staff</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Research <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('frontend.article.all')}}">Article List</a></li>
                                <!-- <li><a href="#">Faculty Member Wise Article</a></li> -->
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.gallery.all')}}">Gallery</a></li>
                        <li><a href="{{route('frontend.notice.all')}}">Notices</a></li>
                        <li><a href="#">Miscellaneous <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('frontend.download.all')}}">Downloads</a></li>
                                <li><a href="{{route('frontend.contact')}}">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-social-link">
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>