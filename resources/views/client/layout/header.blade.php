   <div class="header header-transparent change-logo">
       <div class="container-fluid">
           <nav id="navigation" class="navigation navigation-landscape">
               <div class="nav-header">
                   <!-- <a class="nav-brand static-logo" href="#">
        <img src="{{ asset('./assetsclient/img/Rentinease.png') }}" class="logo" alt="" /></a> -->
                   <!-- <a class="nav-brand fixed-logo" href="#">
            <img src="{{ asset('./assetsclient/img/logo.png') }}" class="logo" alt="" /></a> -->
                   <h4 class="text-primary nav-brand static-logo">LO<span class="text-success">GO</span></h4>
                   <h4 class="text-primary nav-brand fixed-logo">LO<span class="text-success">GO</span></h4>
                   <div class="nav-toggle"></div>
                   <div class="mobile_nav">
                       <ul>
                           <li class="_my_prt_list"><a href="#"><span>2</span>My List</a></li>
                           <li><a href="#" data-toggle="modal" data-target="#login"><i class="fas fa-user-circle fa-lg"></i></a></li>
                       </ul>
                   </div>
               </div>
               <div class="nav-menus-wrapper" style="transition-property: none;">
                   <ul class="nav-menu">

                       <li class="active"><a href="{{ '/' }}">Home<span class="submenu-indicator"></span></a>
                           <!-- <ul class="nav-dropdown nav-submenu">
          <li><a href="index.html">Home 1</a></li>
          <li><a href="home-2.html">Home 2</a></li>
          <li><a href="home-3.html">Home 3</a></li>
          <li><a href="home-4.html">Home 4</a></li>
          <li><a href="home-5.html">Home 5</a></li>
          <li><a href="home-6.html">Home 6</a></li>
          <li><a href="home-7.html">Home 7</a></li>
          <li><a href="map.html">Map Home</a></li>
         </ul> -->
                       </li>

                       <li><a href="{{ '/buy' }}">Buy<span class="submenu-indicator"></span></a>
                           <!-- <ul class="nav-dropdown nav-submenu">
          <li><a href="#">Listing Grid<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="grid-layout-with-sidebar.html">Grid Style 1</a></li>
            <li><a href="grid-layout-2.html">Grid Style 2</a></li>
            <li><a href="grid-layout-3.html">Grid Style 3</a></li>
           </ul>
          </li>
          <li><a href="#">Listing List<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="list-layout-with-sidebar.html">List Style 1</a></li>
            <li><a href="list-layout-with-map-2.html">List Style 2</a></li>
           </ul>
          </li>
          <li><a href="#">Listing Map<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="half-map.html">Half Map</a></li>
            <li><a href="half-map-2.html">Half Map 2</a></li>
            <li><a href="classical-layout-with-map.html">Classical With Sidebar</a></li>
            <li><a href="list-layout-with-map.html">List Sidebar Map</a></li>
            <li><a href="grid-layout-with-map.html">Grid Sidebar Map</a></li>
           </ul>
          </li>
          <li><a href="#">Agents View<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="agents.html">Agent Grid Style</a></li>
            <li><a href="agents-2.html">Agent Grid 2</a></li>
            <li><a href="agent-page.html">Agent Detail Page</a></li>
           </ul>
          </li>
          <li><a href="#">Agency View<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="agencies.html">Agency Grid Style</a></li>
            <li><a href="agency-page.html">Agency Detail Page</a></li>
           </ul>
          </li>
         </ul> -->
                       </li>

                       <li><a href="{{ '/rent' }}">Rent<span class="submenu-indicator"></span></a>
                           <!-- <ul class="nav-dropdown nav-submenu">
          <li class=""><a href="#">User Admin<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="dashboard.html">User Dashboard</a></li>
            <li><a href="my-profile.html">My Profile</a></li>
            <li><a href="my-property.html">My Property</a></li>
            <li><a href="messages.html">Messages</a></li>
            <li><a href="bookmark-list.html">Bookmark Property</a></li>
            <li><a href="submit-property.html">Submit Property</a></li>
           </ul>
          </li>
          <li><a href="#">Single Property<span class="submenu-indicator"></span></a>
           <ul class="nav-dropdown nav-submenu">
            <li><a href="single-property-1.html">Single Property 1</a></li>
            <li><a href="single-property-2.html">Single Property 2</a></li>
            <li><a href="single-property-3.html">Single Property 3</a></li>
            <li><a href="single-property-4.html">Single Property 4</a></li>
        </ul>
          </li>
          <li><a href="compare-property.html">Compare Property</a></li>
         </ul> -->
                       </li>
                       <li><a href="#">Index<span class="submenu-indicator"></span></a></li>
                       <li><a href="{{url( '/findagent') }}">Find Agent<span class="submenu-indicator"></span></a>
                       </li>
                       <!-- <li><a href="{{ '/findagency' }}">Find Agency<span class="submenu-indicator"></span></a>
                       </li> -->

                       <!-- <li><a href="{{ route('agency.portal') }}">Agency Portal<span class="submenu-indicator"></span></a>
                       </li> -->
                       <li><a href="{{ route('agent.portal') }}">Agent Portal<span class="submenu-indicator"></span></a>
                       </li>
                       <li><a href="#">Events<span class="submenu-indicator"></span></a>
                           <!-- <ul class="nav-dropdown nav-submenu">
                               <li><a href="#"> Blog</a></li>
                               <li><a href="#">New Projects</a></li>
                               <li><a href="#">Floor Plans</a></li>
                           </ul> -->
                       </li>
                       <li><a href="{{ url('/blog') }}">Blog<span class="submenu-indicator"></span></a>
                       </li>
                       <li><a href="{{ url('') }}">New Projects<span class="submenu-indicator"></span></a>
                       </li>
                       <li><a href="{{ url('') }}">Floor Plans<span class="submenu-indicator"></span></a>
                       </li>
                   </ul>

                   <ul class="nav-menu nav-menu-social align-to-right">
                       <li>
                           <a href="#" class="alio_green" data-toggle="modal" data-target="#login">
                               <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
                           </a>
                       </li>
                       <li class="add-listing">
                           <a href="#" class="theme-cl">
                               <i class="fas fa-plus-circle mr-1"></i>Become a Member
                           </a>
                       </li>
                   </ul>
               </div>
           </nav>
       </div>
   </div>
   <!-- End Navigation -->
   <div class="clearfix"></div>
   <!-- ============================================================== -->
   <!-- Top header  -->
   <!-- ============================================================== -->