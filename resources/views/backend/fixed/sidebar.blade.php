<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                 
                <a class="nav-link collapsed" href="{{route('dash_board') }}">
                    <div class="sb-nav-link-icon"> <i class="fas fa-tachometer-alt"></i> </div>
                    Dashboard
                     <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="fa-regular fa-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="components-alerts.html">
                                <i class="bi bi-circle"></i><span>Alerts</span>
                                </a>
                            </li>
                        
                            <a class="nav-link collapsed" href="{{route('role.list') }}">
                                <div class="sb-nav-link-icon"> <i class="fas fa-tachometer-alt"></i> </div>
                                Role
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>

                            <a class="nav-link collapsed" href="{{route('permission.list')}}">
                            <div class="sb-nav-link-icon"> <i class="fas fa-tachometer-alt"></i> </div>
                            Permission
                            <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                        </ul>
                    </li>


                <a class="nav-link collapsed" href="{{ route('category.List') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                
                <a class="nav-link collapsed" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Sub-category
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="{{ route('brand.List') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Brand
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="{{route('product.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="{{route('show.data')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i>
                    </div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>


                <a class="nav-link collapsed" href="{{route('user.form')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    User
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Order
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Review
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Reporth
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                    </div>
                    Trannaction
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                
                

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>