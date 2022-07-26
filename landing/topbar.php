<nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="javascript:void(0)"><img src="../assets/images/icon-light.svg" alt="HexaBit Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <span class="logo" >DEPARO</span>
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>                    
                </form>                
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu right_chat email">
                                <?php foreach($queryBlotter as $blotter) { ?>
                                    <!-- $count = mysqli_num_rows($queryBlotter); -->
                                <li>
                                    <span>Case # <strong><?=$blotter['blotter_num']?></strong> has been accepted. <br>
                                    Date: <?=date('F j, Y g:i A',strtotime($blotter['date_and_time2']))?>  </span>
                                </li>
                                    <br>
                                <?php } ?>
                                
                            </ul>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-user"></i>
                            </a>
                            <ul class="dropdown-menu feeds_widget">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-body">
                                            <h4 class="title">Profile</h4>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.php">
                                        <div class="feeds-body">
                                            <h4 class="title">Logout</h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>