
    <div class="uk-container uk-container-medium">
        <nav id="navbar" class="uk-navbar-container" uk-navbar style=" max-height: 62px;"  >
                <div class="uk-navbar-left">
                    <a id="logo" class="uk-navbar-item uk-logo" href="index.php">{{config('app.name')}}</a>
                </div>
                <div class="uk-navbar-right">
                    <form class="uk-search uk-search-default">
                        <span uk-search-icon></span>
                        <input id="search" class="uk-search-input" type="search" placeholder="Search...">
                    </form>

                    @guest 
                    @else 
                        <button id="notification" class="uk-button uk-button-default" type="button">
                            <div id="ex4">
                                <span class="p1 fa-stack fa-2x has-badge" data-count="4">
                                    <!--<i class="p2 fa fa-circle fa-stack-2x"></i>-->
                                    <i style="font-size: 20px;" class="p3 fa fa-bell fa-stack-1x xfa-inverse" data-count="4b"></i>
                                </span>
                            </div>
                        </button>   
                   
                        <div id="account" uk-dropdown="mode: click; ">
                            <ul class="uk-nav uk-dropdown-nav">

                                <table class="uk-table uk-table-striped">
                                    <tbody style="padding: 0px;">
                                        <tr style="text-align: left;">
                                            <td style="font-weight: bold; font-size: 10px;">Your order is placed <p style="font-weight: normal;"> Dummy text of the printing and typesetting industry</p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: left;">
                                            <td style="font-weight: bold; font-size: 10px;">Your order is placed <p style="font-weight: normal;"> Dummy text of the printing and typesetting industry</p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: left;">
                                            <td style="font-weight: bold; font-size: 10px;">Your order is placed <p style="font-weight: normal;"> Dummy text of the printing and typesetting industry</p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: left;">
                                            <td style="font-weight: bold; font-size: 10px;">Your order is placed <p style="font-weight: normal;"> Dummy text of the printing and typesetting industry</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <li style="font-weight: bold; font-size: 10px;" class="uk-active"><a href="notifications.php"> Notification (122) View All </a></li>
                            </ul>
                        </div> 
                        <div class="uk-inline">
                            <button id="navacc" class="uk-button uk-button-default" type="button"><img src="{{asset('icon.png')}}" width="36px;"></button>
                            <div id="account" uk-dropdown="mode: click; ">
                                <ul class="uk-nav uk-dropdown-nav"> 
                                    <li><a href="#"><i class="fas fa-user-circle"></i> Profile</a></li>
                                    <li><a href="#"><i class="fas fa-cogs"></i> Setting</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a style="color: red;" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    @endguest
                </div>
        </nav>
    </div>
    <div class="uk-container uk-container-large" style="background-color:white  ; ">
        <div class="uk-container uk-container-medium">
            <nav id="menubar" class="uk-navbar-container" uk-navbar uk-sticky >
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav" >
                        <li class="uk-active"><a href="index.php"> Dashboard</a></li>
                        <li><a href="#"> Orders</a>
                        <div id="account" uk-dropdown="mode: click; ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="/orders/new">New Orders</a></li>
                                            <li><a href="/orders">Manage Orders</a></li>
                                        </ul>
                                    </div>
                        </li>
                        <li><a href="#">Accounting</a>
                        <div id="account" uk-dropdown="mode: click; ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="expenses.php"> Expenses</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="credits.php">Credit </a></li>
                                        </ul>
                                    </div>
                        </li>
                        <li><a href="/products"> Manage Products</a></li>
                        <li><a href="offers.php">Offers </a></li>
                        <li><a href="#">Stats </a>
                        <div id="account" uk-dropdown="mode: click; ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="today.php">Today Stats</a></li>
                                            <li><a href="annual.php">Annual Stats</a></li>
                                        </ul>
                                    </div>
                        </li>
                        <li><a href="sales.php">Sales </a></li>
                        <li><a href="update.php">update </a></li>
                    </ul> 
                </div> 
            </nav>
        </div> 
    </div>