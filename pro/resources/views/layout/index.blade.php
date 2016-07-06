<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/moban/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/moban/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/moban/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/moban/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/moban/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/moban/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/themer.css" media="screen">

<title>东京商城后台</title>

</head>

<body>



    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/moban/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="/moban/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="/moban/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="/moban/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/moban/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/moban/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/moban/#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="/moban/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="/moban/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="/moban/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/moban/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="/moban/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="/moban/#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
               
                <!-- User Photo -->
                <div id="mws-user-photo">
                   
                    <img src="/imgs/{{session('pic')}}" alt="User Photo">
                  

                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="/moban/#">Profile</a></li>
                        <li><a href="/moban/#">Change Password</a></li>
                        <li><a href="/">退出登录</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"style="color:yellow"></i>用户管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/user/add')}}">用户添加</a></li>
                                 <li><a href="{{url('/admin/user/index')}}">用户列表</a></li>     
                            </ul>

                    </li>
                    <li>
                        <a href="/admin"><i class="icon-user"></i>分类管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/cate/add')}}">分类添加</a></li>
                                 <li><a href="{{url('/admin/cate/index')}}">分类列表</a></li>     
                            </ul>

                    </li>
                    <li>
                        <a href="#"><i class="icon-apple"></i>商品管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/shop/add')}}">商品添加</a></li>
                                 <li><a href="{{url('/admin/shop/index')}}">商品列表</a></li>     
                            </ul>

                    </li>
                    <li>
                        <a href="#"><i class="icon-apple"></i>文章管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/article/add')}}">文章添加</a></li>
                                 <li><a href="{{url('/admin/article/index')}}">文章列表</a></li>     
                            </ul>

                    </li>
                     <li>
                        <a href="#"><i class="icon-attachment"></i>超链接管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/link/add/')}}">超链接添加</a></li>
                                 <li><a href="{{url('/admin/link/index/')}}">链接列表</a></li>     
                            </ul>

                    </li>
                     <li>
                        <a href="#"><i class="icon-attachment"></i>评论管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/comment/add')}}">商品评论添加</a></li>
                                 <li><a href="{{url('/admin/comment/index')}}">评论列表</a></li>     
                            </ul>

                    </li>
                    <li>
                        <a href="#"><i class="icon-attachment"></i>订单管理</a>
                            <ul class="closed">
                                 <li><a href="{{url('/admin/order/index')}}">订单列表</a></li>
                                 <li><a href="{{url('/admin/order/index')}}">评论列表</a></li>     
                            </ul>

                    </li>
                   <!--  <li><a href="/moban/calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                    <li><a href="/moban/files.html"><i class="icon-folder-closed"></i> File Manager</a></li>
                    <li><a href="/moban/table.html"><i class="icon-table"></i> Table</a></li> -->
                    <li>
                        <a href="/moban/#"><i class="icon-list"></i> Forms</a>
                        <ul>
                            <li><a href="/moban/form_layouts.html">Layouts</a></li>
                            <li><a href="/moban/form_elements.html">Elements</a></li>
                            <li><a href="/moban/form_wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="/moban/widgets.html"><i class="icon-cogs"></i> Widgets</a></li>
                    <li><a href="/moban/typography.html"><i class="icon-font"></i> Typography</a></li>
                    <li><a href="/moban/grids.html"><i class="icon-th"></i> Grids &amp; Panels</a></li>
                    <li><a href="/moban/gallery.html"><i class="icon-pictures"></i> Gallery</a></li>
                    <li><a href="/moban/error.html"><i class="icon-warning-sign"></i> Error Page</a></li> -->
                    <li>
                        <a href="/moban/icons.html">
                            <i class="icon-pacman"></i> 
                            Icons <span class="mws-nav-tooltip">2000+</span>
                        </a>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
       <div id="mws-container" class="clearfix">
        
                <div class="container">
            @if(session('success'))
            <div class="mws-form-message warning">
                    {{session('success')}}
             </div>
            @endif
             @if(session('error'))
            <div class="mws-form-message warning">
                    {{session('error')}}
             </div>
            @endif
             @section('content')
             @show

                               
                  <!-- Panels End -->
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
        </div>
        <!-- Main Container End -->
        
    </div>
                
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/moban/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/moban/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/moban/js/libs/jquery.placeholder.min.js"></script>
    <script src="/moban/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/moban/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/moban/jui/jquery-ui.custom.min.js"></script>
    <script src="/moban/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/moban/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/moban/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/moban/plugins/flot/jquery.flot.min.js"></script>
    <script src="/moban/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/moban/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/moban/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/moban/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/moban/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/moban/plugins/validate/jquery.validate-min.js"></script>
    <script src="/moban/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/moban/bootstrap/js/bootstrap.min.js"></script>
    <script src="/moban/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/moban/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/moban/js/demo/demo.dashboard.js"></script>

</body>
</html>