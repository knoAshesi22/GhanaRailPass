<?php
//
session_start();
//include 'includes/accessblocker.php';
//
//?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.blue.css">

    <link rel="stylesheet" href="styles/custom.css">
    <link rel="stylesheet" href="styles/inbox.css">

    <title ><?php echo $_SESSION['username'];?> 's Profile Page</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>

<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
                <h2 class="h5"><?php echo $_SESSION['fullname'];?></h2>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><img src="img2/avatar-7.jpg" alt="Profile Picture" class="img-fluid rounded-circle"></a></div>

        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">User Actions</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="#" onclick="loadContent('main')"> <i class="fa fa-home" aria-hidden="true"></i>Main</a></li>
<!--                <li><a href="#" onclick="loadContent('inbox')"> <i class="fa fa-envelope" aria-hidden="true"></i>View Inbox</a></li>-->
<!--                <li><a href="#" onclick="loadContent('subscribe')"> <i class="fa fa-eye" aria-hidden="true"></i>View Schedule  </a></li>-->
                <li><a href="#" onclick="loadContent('vtrips')"> <i class="fa fa-eye" aria-hidden="true"></i>View Available Trips  </a></li>
                <li><a href="#" onclick="loadContent('edit')"> <i class="fa fa-user-circle" aria-hidden="true"></i>Edit Details </a></li>

<!--                <li><a href="#" onclick="loadContent(\'subscribe\')"> <i class="fa fa-user-circle" aria-hidden="true"></i>Apply to be an Administrator  </a></li>-->

            </ul>
        </div>
        <?php
        if($_SESSION['admin']== 1){

            echo '
        <div class="admin-menu" >
            <h5 class="sidenav-heading">Administrator Actions</h5>
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li> <a href="#" onclick="loadContent(\'ctrain\')"> <i class="fa fa-plus" aria-hidden="true"></i>Create Train</a></li>
                <li> <a href="#" onclick="loadContent(\'ctrip\')"> <i class="fa fa-plus" aria-hidden="true"></i>Create Trip</a></li>
                <li> <a href="#" onclick="loadContent(\'cstation\')"> <i class="fa fa-plus" aria-hidden="true"></i>Create Station</a></li>

            </ul>
        </div>';

        }


        ?>
    </div>
</nav>

<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></a><a href="profile.php" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><span>Ghana </span><strong class="text-primary">Railpass</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="index.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Return Home</span><i class="fa fa-home" aria-hidden="true"></i></a></li>


                        <!-- Log out-->
                        <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="content">

        <!--        <form action="" name="contentform">-->


        <!--        </form>-->




    </section>
    <?php
    include 'includes/footer.php'
    ?>
</div>





</body>
<script>
    var request = new XMLHttpRequest();
    var content=document.getElementById("content");

    function loadContent(page){
        request.open("GET", "profilePages/"+page+".php", false);
        request.send(null);
        if (request.status === 200){
            content.innerHTML=request.responseText;
        }else {
            alert("Error- " + request.status + ": " + request.statusText);
        }

    }

    function loadMessage(id){
        var title=document.getElementById('title-'+id).innerText;
        var message=document.getElementById('message-'+id).value;
        var mtitle=document.getElementById("mtitle");
        mtitle.innerText=title;
        var mbody=document.getElementById("mbody");
        mbody.innerText=message;

    }

</script>
<script>
    $(document).ready(function(){
        $('#toggle-btn').on('click', function (e) {

            e.preventDefault();

            if ($(window).outerWidth() > 1194) {
                $('nav.side-navbar').toggleClass('shrink');
                $('.page').toggleClass('active');
            } else {
                $('nav.side-navbar').toggleClass('show-sm');
                $('.page').toggleClass('active-sm');
            }
        });

    });
</script>


<!--<script src="js/front.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function book_func(trip_id){

        $.post(
            "./profilePages/booking.php",
            {
                "submit": true,
                "tripid": trip_id
            },
            function(data,status){
                alert(data);
            });

    }
</script>


</html>