<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ config('app_url') }}/products">
                <i class="bi bi-menu-button-wide"></i><span>Products</span>
            </a>

        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ config('app_url') }}/onlinesales">
                <i class="bi bi-journal-text"></i><span>Online Sales</span>
            </a>

        </li><!-- End Forms Nav -->





        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ config('app_url') }}/physicalsales">
                <i class="bi bi-gem"></i><span>Physical sales</span>
            </a>

        </li><!-- End Icons Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Customers</span>
            </a>

        </li><!-- End Icons Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>All Online Sales</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>All Physical Sales</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Charts Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ config('app_url') }}/userprofile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->











    </ul>

</aside><!-- End Sidebar-->
