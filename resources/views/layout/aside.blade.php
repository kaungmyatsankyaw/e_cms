@php
    $_side_menu=app('request')->get('menu')['side_menu'];
@endphp

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(material/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"><img src="material/assets/images/users/profile.png" alt="user"/></div>
            <!-- User profile text-->
            {{--            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>--}}
            {{--                <div class="dropdown-menu animated flipInY">--}}
            {{--                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>--}}
            {{--                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>--}}
            {{--                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>--}}
            {{--                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>--}}
            {{--                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                @foreach($_side_menu as $_menu)
                    <li>
                        <a class="waves-effect waves-dark" href="{{ url($_menu['url']) }}" aria-expanded="false">
                            <span class="hide-menu">{{ $_menu['name'] }} </span></a>
                    </li>

                @endforeach

                {{--                    <li class="nav-devider"></li>--}}

                {{--                <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>--}}

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>