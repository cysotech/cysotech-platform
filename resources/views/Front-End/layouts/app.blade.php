<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Contact || Cysotech</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/wind2.png">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        <!--header-->
    <div class="bg-light text-muted d-none d-lg-block">
        <div class="container">
            <small><b>E-mail:</b> info@cysoteh.com</small> |
            <small><b>Phone:</b> +2347010249069</small> |
            <small><b>Location:</b> 18, Babaponmile, Onipetesi, Mangoro, KJA.</small>
            <small class="float-right"><a href= {{ route('register') }}  style="color: darkgray">Register </a></small> <j class="float-right mr-1 ml-1"> | </j>
            <small class="float-right"><a href="#" style="color: darkgray"> Reset Password</a></small>
        </div>
    </div>   
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href= {{ route('index') }} ><img src="img/wind2.png" alt="" class="mr-2">Cysotech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href= {{ route('index') }} >Home</a>
                    </li>
                    <li class="nav-item" id="navItem">
<!--                        <a class="nav-link" href="#">Pages</a>-->
                        <div class="dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                           </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <small><a class="dropdown-item" href= {{ route('contact') }} >Contact<span class="sr-only">(current)</span></a>
                        <hr>
                        <a class="dropdown-item" href= {{ route('register') }} >Register</a></small>
                      </div>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href= {{ route('services') }} >Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href= {{ route('blog') }} >Blog</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a class="btn btn-primary btn-sm" href= {{ route('login') }} >Login</a>
                    </li>
                    <li class="nav-item mt-1">
                        <a class="" href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="nav-item mt-1">
                        <a class="" href="#"><i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@yield('content')

   <footer class="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <!--col-1-->
                    <div class="col-xs-12 col-md mb-4">
                        <h6>About Cysotech</h6>
                        <hr>
                        <small class="text-muted">Cysotech focuses on building a platform on which Latest Technology are used to Powered our Projects ensuring Advanced Security . We put our best skills and experiences to complete your projects making it a first class lasting Work Ease to Manage saving you over 70% renewal cost yearly</small>
                    </div>
                    <!--col-2-->
                    <div class="col-xs-12 col-md mb-4">
                        <h6>Additional Links</h6>
                        <hr>

                        <ul>
                            <li><small><a href="#">FAQ</a></small></li>
                            <hr>
                            <li><small><a href="#">Teams</a></small></li>
                            <hr>
                            <li><small><a href="#">Register</a></small></li>
                            <hr>
                            <li><small><a href="#">Terms and Conditions</a></small></li>
                            <hr>
                            <li><small><a href="#">Privacy Policy</a></small></li>
                            <hr>

                        </ul>
                    </div>
                    <!--col-3-->
                    <div class="col-xs-12 col-md mb-4">
                        <h6>Contact Information</h6>
                        <hr>
                        <small class="text-muted">
                            <b>Address:</b> 18 Babapomile Str
                            Onipetesi, Mangoro, Ikeja, Lagos
                            NG 10024
                        </small>
                        <br><br>
                        <small class="text-muted">
                            <b>Phone: </b>+2347010249069
                        </small>
                        <br><br>
                        <small class="text-muted">
                            <b>E-mail: </b><a href="mailto:info@cysotech.com">info@cysotech.com</a>
                        </small>
                        <br><br>
                        <small class="text-muted">
                            <b>Skype: </b>cysotech
                        </small>
                    </div>
                    <!--col-4-->
                    <div class="col-xs-12 col-md mb-4">
                        <h6>Say Hello</h6>
                        <hr>
                        <form class="text-muted" action="">
                            <small><b>Your Email </b>
                                <star style="color: red;">*</star>
                            </small><br>
                            <input type="email" required><br>
                            <small><b>Your Message </b>
                                <star style="color: red">*</star>
                            </small><br>
                            <textarea name="Message" id="" cols="30" rows="5"></textarea><br>
                            <button class="btn btn-primary btn-md">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark text-light" id="bottom-footer">
            <div class="container">
                <small class="">&copy; 2019 Created by Cysotech Ltd. All rights reserved.
                </small>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/three.r92.min.js"></script>
    <script src="js/vanta.net.min.js"></script>
    <script>
        VANTA.NET({
            el: "#subHeader",
            color: 0x3f60ff,
            backgroundColor: 0x0
        })
    </script>
    
    <script>
        $('.dropdown-toggle').hover(()=>{
//            $('.dropdown-toggle').trigger('click');
            $('.dropdown-menu').show('fast')
            
        })
        
        $(document).click(()=>{
            $('.dropdown-menu').hide('fast')
        })
        
    </script>

</body>

</html>