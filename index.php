<?php
$site = "https://www.sfrancis.ca/videos/";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sfrancis - Professional Tube">
    <meta name="author" content="Sajiv Francis">

    <style>
          img {
          max-width: 100%;
          height: auto;
              }
    </style>

    <title>Sfrancis - Professional Tube</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">
    <link href="https://www.sfrancis.ca/videos/js/seetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <script src="https://www.sfrancis.ca/videos/js/seetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="https://www.sfrancis.ca/videos/js/script.js" type="text/javascript"></script>

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
               </button>
                <a class="navbar-brand page-scroll" href="https://www.sfrancis.ca/videos/view/img/sfrancis.png"><img src="./img/sfrancis.png" width="145" height="50" alt="Sfrancis.ca" class="img-responsive" itemprop="name"></a>
           </div>
        </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll">
                    <a href="#page-top">Home</a>
                </li>
                <li class="page-scroll">
                    <a href="#download">About</a>
                </li>
                <li class="dropdown">
                    <a href="#videocategories" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Video Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu no-active">
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Featured Categories</li>
                        <li class="page-scroll"><a href="https://www.sfrancis.ca/videos/cat/project-management">Project Management</a></li>
                        <li class="page-scroll"><a href="https://www.sfrancis.ca/videos/cat/information-technology">Information Technology</a></li>
                        <li class="page-scroll"><a href="https://www.sfrancis.ca/videos/cat/accounting">Accounting</a></li>
                        <li class="page-scroll"><a href="https://www.sfrancis.ca/videos/cat/taxation">Taxation</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Connect with Sfrancis</li>
                        <li class="page-scroll"><a href="https://www.sfrancis.ca/videos/contact">Email me</a></li>
                    </ul>
                </li>
            </ul>
        </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <center><h1>Connect, share, learn and discuss latest concepts in project management, information technology, accounting and taxation</h1></center>
                            <center><a href="https://www.sfrancis.ca/videos" class="btn btn-outline btn-xl page-scroll">Watch videos!</a></center>&nbsp

                            <div class="row skills" itemprop="subscribe">
                             <center><button class="btn btn-outline subscribeButton" data-original-title="" title="" aria-describedby="popover74913"><span class="fa fa-envelope"></span> <b>Subscribe</b></button></center>
                                <div id="popover-content" class="hide">
                                    <div class="input-group">
                                        <input type="text" placeholder="E-mail" class="form-control" id="subscribeEmail">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" id="subscribeButton1">Subscribe</button> 
                                        </span>
                                    </div>
                                </div>
                                <style>
                                    .subscribeButton{
                                        background-color: #d00000;
                                        color: #FFF;
                                    }
                                    .subscribeButton:hover, .subscribeButton:active, .subscribeButton:focus{
                                        background-color: #d00000;
                                        color: #FFF;
                                    }

                                    .subscribeButton span:before {
                                      content: "\f16a";
                                    }

                                    .subscribeButton.subscribed{
                                        background-color: #D00000;
                                        color: #777;
                                    }

                                    .subscribeButton.subscribed span:before {
                                      content: "\f00c";
                                    }

                                    .subscribeButton.subscribed:hover span:before {
                                      content: "\f057";
                                    }
                                </style>
                                            <script>

                                                function validateEmail(email) {
                                                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                                    return re.test(email);
                                                }
                                                function subscribe(email) {
                                                    $.ajax({
                                                        url: 'https://www.sfrancis.ca/videos/subscribe.json',
                                                        method: 'POST',
                                                        data: {'email': email},
                                                        success: function (response) {
                                                            console.log(response);
                                                            if (response.subscribe == "i") {
                                                                $('.subscribeButton').removeClass("subscribed");
                                                                $('.subscribeButton b').text("Subscribe");
                                                            } else {
                                                                $('.subscribeButton').addClass("subscribed");
                                                                $('.subscribeButton b').text("Subscribed");
                                                            }
                                                            $('#popover-content #subscribeEmail').val(email);
                                                            $('.subscribeButton').popover('hide');
                                                        }
                                                    });
                                                }
                                                $(document).ready(function () {
                                                    $(".subscribeButton").popover({
                                                        trigger: 'manual',
                                                        html: true,
                                                        content: function () {
                                                            return $('#popover-content').html();
                                                        }
                                                    });
                                                    $(".subscribeButton").click(function () {
                                                        email = $('#subscribeEmail').val();
                                                        console.log(email);
                                                        if (validateEmail(email)) {
                                                            subscribe(email);
                                                        } else {
                                                            $('.subscribeButton').popover('show');
                                                            $("#subscribeButton2").click(function () {
                                                                $(".subscribeButton").trigger("click");
                                                            });
                                                        }
                                                    });
                                                    $('#forgotPassword').click(function () {
                                                        var user = $('#inputUser').val();
                                                        if (!user) {
                                                            swal("Sorry", "Please input your username and try the forgot password link again!!", "error");
                                                            return false;
                                                        }
                                                        var capcha = '<span class="input-group-addon"><img src="https://www.sfrancis.ca/videos/captcha" id="captcha"></span><span class="input-group-addon"><span class="btn btn-xs btn-success" id="btnReloadCapcha"><span class="glyphicon glyphicon-refresh"></span></span></span><input name="captcha" placeholder="Type the code" class="form-control" type="text" style="height: 60px;" maxlength="5" id="captchaText">';
                                                        swal({
                                                        title: user + ", Not a problem!",
                                                                text: "Registered users will get  an email link to recover your password!" + capcha,
                                                                type: "warning",
                                                                html: true,
                                                                showCancelButton: true,
                                                                confirmButtonClass: "btn-danger",
                                                                confirmButtonText: "Yes, send it!",
                                                                closeOnConfirm: false
                                                    },
                                                            function () {
                                                                modal.showPleaseWait();
                                                                $.ajax({
                                                                    url: '<?php echo $site; ?>recoverPass',
                                                                    data: {"user": $('#inputUser').val(), "captcha": $('#captchaText').val()},
                                                                    type: 'post',
                                                                    success: function (response) {
                                                                        if (response.error) {
                                                                            swal("Error", response.error, "error");
                                                                        } else {
                                                                            swal("E-mail sent", "We have sent you an e-mail with instructions", "success");
                                                                        }
                                                                        modal.hidePleaseWait();
                                                                    }
                                                                });
                                                            });
                                                    $('#btnReloadCapcha').click(function () {
                                                        $('#captcha').attr('src', 'https://www.sfrancis.ca/videos/captcha?' + Math.random());
                                                        $('#captchaText').val('');
                                                    });
                                                });
                                                });
                                            </script>
                            </div>
                        </div>
                    </div>
                </div>
         <div class="container">
             <div class="row">
                <div class="col-sm-12 col-centered">
                   <div class="header-content">
                     <div class="header-content-inner">
                        <center><h1>SignUp and Login</h1></center>
                        <form class="form-compact well form-horizontal" id="loginForm">
                            <fieldset>
                                <legend>Please sign in</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">User</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="inputUser" placeholder="User" class="form-control" type="text" value="" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="inputPassword" placeholder="Password" class="form-control" type="password" value="">
                                        </div>
                                        <small><a href="#" id="forgotPassword">I forgot my password</a></small>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success  btn-block" id="mainButton"><span class="fa fa-sign-in"></span> Sign in</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a href="https://www.sfrancis.ca/videos/signUp" class="btn btn-primary btn-block" id="facebookButton"><span class="fa fa-user-plus"></span> Sign up</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                    <a href="https://www.sfrancis.ca/videos/objects/login.json.php?type=Facebook" class="btn btn-primary btn-block" id="facebookButton"><span class="fa fa-facebook-square"></span> Facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                    <a href="https://www.sfrancis.ca/videos/objects/login.json.php?type=Google" class="btn btn-danger btn-block" id="googleButton"><span class="fa fa-google"></span> Google</a>
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">About the website!</h2>
                    <p>This website has both a private and public collection of videos discussing the latest information technology, project management, accounting procedures and tax regulations applicable to businesses. Authorised users can upload, view, share and comment on videos. We hope you enjoy the useful content available on this site and please feel free to give us your input and suggestions.</p>
                    <div class="badges">
                     <a id="videos" href="https://www.sfrancis.ca/videos" style="text-decoration: none"><button type="button" class="btn btn-primary btn-lg btn-block">Go to Videos</button></a>
                     <a id="contact us" href="https://www.sfrancis.ca/videos/contact" style="text-decoration: none"><button type="button" class="btn btn-info btn-lg btn-block">Contact Info</button></a>&nbsp
&nbsp
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <style>
                            h2 {
                                   color:#d00000;
                                 }
                        </style>
                        <b><h2>Video categories</h2></b>
                        <p class="text-muted"><b>Check out the various categories of videos on this site!</b></p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                              <div class="screen">
                                <a href="https://www.sfrancis.ca/videos/"><img src="img/red.png" class="img-responsive" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="https://www.sfrancis.ca/videos/cat/project-management" style="text-decoration: none"> <i class="icon-people text-primary"></i></a>
                                    <h3><a href="https://www.sfrancis.ca/videos/cat/project-management" style="text-decoration: none">Project Management</a></h3>
                                    <p class="text-muted">Videos on planning, organizing, securing, managing, leading, and controlling resources to achieve specific goals!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="https://www.sfrancis.ca/videos/cat/information-technology" style="text-decoration: none"> <i class="icon-globe text-primary"></i></a>
                                    <h3><a href="https://www.sfrancis.ca/videos/cat/information-technology" style="text-decoration: none">Information Technology</a></h3>
                                    <p class="text-muted">Videos on application of computers to store, study, retrieve, transmit, and manipulate data, or information for a business or other enterprise!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="https://www.sfrancis.ca/videos/cat/accounting" style="text-decoration: none"> <i class="icon-calculator text-primary"></i></a>
                                    <h3><a href="https://www.sfrancis.ca/videos/cat/accounting" style="text-decoration: none">Accounting</a></h3>
                                    <p class="text-muted">Videos in the measurement, processing and communication of financial information!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="https://www.sfrancis.ca/videos/cat/taxation" style="text-decoration: none"> <i class="icon-calendar text-primary"></i></a>
                                    <h3><a href="https://www.sfrancis.ca/videos/cat/taxation" style="text-decoration: none">Taxation</a></h3>
                                    <p class="text-muted">Videos on calculation and variations of taxes imposed on individuals or corporations with their income or profits!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="videoembed" class="videoembed">
       <div class="container">
         <div class="row">
           <div class="col-lg-12 text-center">
             <div class="section-heading">
                        <style>
                            h2 {
                                   color:#d00000;
                                 }
                        </style>
                        <center><b><h2>Embed & Share videos</h2></b></center>
                        <p class="text-muted"><b>You can share, embed, iframe and email videos available on this site!</b></p>
                        <hr>
                        <center><iframe width="640" height="480" style="max-width: 100%;max-height: 100%;" src="https://www.sfrancis.ca/videos/videoEmbeded/sfrancisvideos-mp4" frameborder="0" allowfullscreen="allowfullscreen" class="SfrancisIframe"></iframe></center>
                        <center><iframe width="640" height="480" style="max-width: 100%;max-height: 100%;" src="https://www.sfrancis.ca/videos/videoEmbeded/sajivfrancis-mp4" frameborder="0" allowfullscreen="allowfullscreen" class="SfrancisIframe"></iframe></center>
             </div>
           </div>
         </div>
       </div>
   </section>
    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>We <i class="fa fa-heart"></i> to discuss business & technology;&nbsp login & connect through facebook or google!</h2>
            <ul class="list-inline list-social">
                <li class="social-facebook">
                    <a href="https://www.sfrancis.ca/videos/objects/login.json.php?type=Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="https://www.sfrancis.ca/videos/objects/login.json.php?type=Google"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 <a href="https://www.sfrancis.ca">sfrancis.ca</a> - All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="https://www.sfrancis.ca/videos/privacypolicy">Privacy</a>
                </li>
                <li>
                    <a href="https://www.sfrancis.ca/videos/termsandconditions">Terms</a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
            $(document).ready(function () {
                $('#loginForm').submit(function (evt) {
                    evt.preventDefault();
                    modal.showPleaseWait();
                    $.ajax({
                        url: '<?php echo $site; ?>login',
                        data: {"user": $('#inputUser').val(), "pass": $('#inputPassword').val()},
                        type: 'post',
                        success: function (response) {
                            if (!response.isLogged) {
                                modal.hidePleaseWait();
                                swal("Sorry!", "Your username or password is wrong!", "error");
                            } else {
                                document.location = '<?php echo $site; ?>'
                            }
                        }
                    });
                });

                $('#updateUserForm').submit(function (evt) {
                    evt.preventDefault();
                    modal.showPleaseWait();
                    var pass1 = $('#inputPassword').val();
                    var pass2 = $('#inputPasswordConfirm').val();
                    // password dont match
                    if (pass1 != '' && pass1 != pass2) {
                        modal.hidePleaseWait();
                        swal("Sorry!", "Your password does not match!", "error");
                        return false;
                    } else {
                        $.ajax({
                            url: '<?php echo $site; ?>createUser',
                            data: {"user": $('#inputUser').val(), "pass": $('#inputPassword').val(), "email": $('#inputEmail').val(), "name": $('#inputName').val()},
                            type: 'post',
                            success: function (response) {
                                if (response.status > 0) {
                                    swal({
                                        title: "Congratulations!",
                                        text: "Your user account has been created!",
                                        type: "success"
                                    },
                                            function () {
                                                window.location.href = '<?php echo $site; ?>user';
                                            });
                                } else {
                                    if (response.error) {
                                        swal("Sorry!", response.error, "error");
                                    } else {
                                        swal("Sorry!", "Your user account has NOT been created!", "error");
                                    }
                                }
                                modal.hidePleaseWait();
                            }
                        });
                        return false;
                    }
                });
            });
        </script>

</body>

</html>
