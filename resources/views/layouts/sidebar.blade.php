<!-- Main Sidebar -->
<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="/dashboard">
                        <img src="/img/avatar2.jpg" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">Chatwork Fowarder</div>
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="/dashboard"><i class="fa fa-bar-chart-o"></i> Dashboard</a>
                </li>
                @admin
                <li>
                    <a href="/admin/users"><i class="fa fa-users"></i> Users</a>
                </li>
                <li>
                    <a href="/admin/webhooks"><i class="fa fa-desktop"></i> Webhooks</a>
                </li>
                @else
                <li>
                    <a href="/webhooks"><i class="fa fa-desktop"></i> Webhooks</a>
                </li>
                <li>
                    <a href="/bots"><i class="fa fa-reddit"></i> Bots</a>
                </li>
                @endadmin
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->
