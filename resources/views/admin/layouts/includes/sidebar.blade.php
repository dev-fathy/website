<div class="logo">
                <a href="#">
                    <img src="{{ asset('temp/images/icon/logo-white.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ asset('temp/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
                    </div>
                    <h4 class="name">john doe</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#" target="_self">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <!-- <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span> -->
                            </a>
                            <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i>Inbox</a>
                            <span class="inbox-num">3</span>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>Products
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('product') }}">
                                        <i class="fas fa-shopping-basket"></i>Products</a>
                                </li>
                                <li>
                                    <a href="{{ url('categories') }}">
                                        <i class="far fa-check-square"></i>Categories</a>
                                </li>
                                <li>
                                    <a href="{{ url('/brands') }}">
                                        <i class="fas fa-calendar-alt"></i>Brands</a>
                                </li>
                            </ul>
                        </li>
 
                        <li>
                            <a href="{{ url('/userpanel') }}">
                                <i class="fas fa-user"></i>Users</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>