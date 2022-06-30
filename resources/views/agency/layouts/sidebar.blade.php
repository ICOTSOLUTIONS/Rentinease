<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index-2.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Gati</span>
            </a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image" src="assets/img/user.png">
            </div>
            <div class="sidebar-user-details">
                <!-- <div class="user-name">Olivia Thomas</div> -->
                <div class="user-role">Administrator</div>
                <!-- <div class="sidebar-userpic-btn">
                    <a href="profile.html" data-toggle="tooltip" title="Profile">
                        <i data-feather="user"></i>
                    </a>
                    <a href="email_inbox.html" data-toggle="tooltip" title="Mail">
                        <i data-feather="mail"></i>
                    </a>
                    <a href="chat.html" data-toggle="tooltip" title="Chat">
                        <i data-feather="message-square"></i>
                    </a>
                    <a href="login.html" data-toggle="tooltip" title="Log Out">
                        <i data-feather="log-out"></i>
                    </a>
                </div> -->
            </div>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown">
                <a href="{{ route('agency.dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
                <a href="{{ route('agent.agency.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Agent</span></a>
                <!-- <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-2.html">Dashboard 1</a></li>
                    <li><a class="nav-link" href="index2.html">Dashboard 2</a></li>
                </ul> -->
            </li>
            <!-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Widgets</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                    <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                </ul>
            </li> -->
        </ul>
    </aside>
</div>
