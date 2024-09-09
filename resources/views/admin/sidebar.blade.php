         <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="{{ url('admin/dashboard') }}">Dhaka Golf Club</a>
                </div>
                <br>
                <br>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="{{ url('admin/dashboard') }}" class="sidebar-link">
                            <i class="fa-solid fa-house pe-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                            Members
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ url('view_members') }}" class="sidebar-link">Members List</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ url('add_member') }}" class="sidebar-link">Add New Member</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="/" class="sidebar-link">
                            <i class="fa-solid fa-person-circle-check pe-2"></i>
                            Member Approval
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/" class="sidebar-link">
                            <i class="fa-solid fa-money-check-dollar pe-2"></i>
                            Payment Status
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/" class="sidebar-link">
                            <i class="fa-solid fa-user-slash pe-2"></i>
                            Role and Permission
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-calendar-days pe-2"></i>
                            Events
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">View All Events</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Add New Event</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#album" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-images pe-2"></i>
                            Albums
                        </a>
                        <ul id="album" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">View Albums List</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Upload Image</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">

                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-link logout">
                            <i class="fa-solid fa-right-from-bracket pe-2"></i>
                            Logout
                    </button>
                    
                     </form>
                        
                    </li>
                </ul>
            </div>
        </aside>