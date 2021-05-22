<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="#">Dashboard</a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="{{ route('officer.dashboard') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashborad</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-clipboard"></i></span>
                        <span class="ttr-label">Notices</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('notice.create.index') }}" class="ttr-material-button"><span class="ttr-label">Create New Notice</span></a>
                        </li>
                        <li>
                            <a href="{{ route('notice.index') }}" class="ttr-material-button"><span class="ttr-label">List Notices</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-save"></i></span>
                        <span class="ttr-label">Downloads</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('download.create.index') }}" class="ttr-material-button"><span class="ttr-label">Add New File</span></a>
                        </li>
                        <li>
                            <a href="{{ route('download.index') }}" class="ttr-material-button"><span class="ttr-label">List Files</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('profile.show')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-settings"></i></span>
                        <span class="ttr-label">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('welcome')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-layout"></i></span>
                        <span class="ttr-label">Site Home</span>
                    </a>
                </li>
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>