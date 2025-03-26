<aside id="sidebar" class="js-sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <hr class="text-secondary m-0 mb-4">
                <ul class="sidebar-nav mb-5">
                    <li class="sidebar-header text-center mb-4">
                        <img src="images/admin.png" alt="admin">
                        <h1 class="fs-6 text-white">Admin</h1>
                        <h2 class="text-success" style="font-size:12px;"><i class="fa-solid fa-circle pe-1"></i>Online</h2>
                    </li>
                    <li class="sidebar-item">
                        <a href="admin.php" class="sidebar-link">
                            <i class="fa-solid fa-home pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-kitchen-set pe-2"></i>
                            Kitchen Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#manageorder" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-brands fa-first-order pe-2"></i>
                            Manage Order
                            <i class="arrow fa-solid fa-angle-up float-end"></i>
                        </a>
                        <ul id="manageorder" class="sidebar-dropdown ms-4 list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="order.php" class="sidebar-link"><i class="fa-solid fa-list pe-2"></i>Online Order List</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-hourglass-half pe-2"></i> Pending Order</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-check pe-2"></i> Complete Order</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-ban pe-2"></i> Cancel Order</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#reservation" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-tags pe-2"></i>
                            Reservation
                            <i class="arrow fa-solid fa-angle-up float-end"></i>
                        </a>
                        <ul id="reservation" class="sidebar-dropdown ms-4 list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="reservation.php" class="sidebar-link"><i class="fa-solid fa-registered pe-2"></i> Reservation</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-gear pe-2"></i> Reservation Setting</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#foodmanage" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-tags pe-2"></i>
                            Food Management
                            <i class="arrow fa-solid fa-angle-up float-end"></i>
                        </a>
                        <ul id="foodmanage" class="sidebar-dropdown ms-4 list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="add_food.php" class="sidebar-link"><i class="fa-solid fa-registered pe-2"></i> Add Dish</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="view_food.php" class="sidebar-link"><i class="fa-solid fa-gear pe-2"></i> View Dishes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#banquet" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-tags pe-2"></i>
                            Banquet Management
                            <i class="arrow fa-solid fa-angle-up float-end"></i>
                        </a>
                        <ul id="banquet" class="sidebar-dropdown ms-4 list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="birthday.php" class="sidebar-link"><i class="fa-solid fa-registered pe-2"></i> Birthday Banquet</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="meeting.php" class="sidebar-link"><i class="fa-solid fa-gear pe-2"></i> Meeting Banquet</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="wedding.php" class="sidebar-link"><i class="fa-solid fa-registered pe-2"></i> Wedding Banquet</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="engagement.php" class="sidebar-link"><i class="fa-solid fa-gear pe-2"></i> Engagement Banquet</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                        <i class="fa-solid fa-arrow-right-from-bracket pe-2"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </aside>