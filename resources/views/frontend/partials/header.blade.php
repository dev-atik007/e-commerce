<div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">

                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +880 1777-124706</li>
                            <li><i class="ti-email"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84f7f1f4f4ebf6f0c4f7ecebf4ecf1e6aae7ebe9">[email&#160;protected]</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="right-content">
                        <ul class="list-main">
                            @guest
                                
                            <li><i class="ti-power-off"></i><a href="login.html#">Login</a></li> 
                          
                            <li><i class="ti-power-off"></i><a href="login.html#">Register</a></li>
                            @endguest
                            
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">

                    <div class="logo">
                        <h2>Common</h2>
                    </div>


                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="fa-duotone fa-magnifying-glass"></i></a></div>

                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="fa-duotone fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                    </div>

                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <form>
                                <input name="search" placeholder="Search Here....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">

                        
                        
                        <div class="sinlge-bar shopping">
                           

                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>
                                    <a href="#">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://wpthemesgrid.com/themes/free/eshop/images/product-1.jpg" alt="#"></a>
                                        <h4><a href="#">Woman Ring</a></h4>
                                        <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="https://wpthemesgrid.com/themes/free/eshop/images/product-2.jpg" alt="#"></a>
                                        <h4><a href="#">Woman Necklace</a></h4>
                                        <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                    </li>
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">$134.00</span>
                                    </div>
                                    <a href="checkout.html" class="btn animate">Checkout</a>
                                </div>
                            </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="all-category">
                            <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                            <ul class="main-category">
                                @foreach($category as $data)
                                <li><a href="">{{$data->name}}</a></li>

                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">

                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="">Home</a></li>
                                            <li><a href="#">Pages</a></li>  
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- registration Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter Your Name:</label>
                        <input required type="text" name="customer_name" class="form-control" placeholder="Enter your name">
                    </div>
                        <div class="form-group">
                            <label for="">Enter Your email:</label>
                            <input required type="email" name="customer_email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Your password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Your Password:</label>
                            <input required type="password" name="password_confirmation" class="form-control" placeholder="confirm password">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.login')}}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Enter Your email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label for="">Enter Your password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>