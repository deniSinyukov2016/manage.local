<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('projects.index')}}" class="site_title"><i class="fa fa-paw"></i> <span>ManageTeam</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{auth()->user()->avatar_url}}" alt="avatar" class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Привет,</span>
            <h2>{{auth()->user()->fullname}}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>

            <ul class="nav side-menu">
                <li><a href="{{route('dashboard.index')}}"><i class="fas fa-home"></i> Dashboard </a></li>

                <li><a><i class="far fa-list-alt"></i> Проекты <span class="fas fa-angle-down pull-right"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{route('projects.index')}}"> Список проектов</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>


    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>