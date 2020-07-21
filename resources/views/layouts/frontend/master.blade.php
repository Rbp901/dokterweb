<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RBP</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">

    </head>
<body>
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end of preloader -->

    <div class="body-content" style="display:none;">
        <div class="navbar-solid-state">
             <!-- Header -->
            <header id="header" class="alt">
                <!-- <h1><a href="index.html" class="a-transparent">Solid State</a></h1> -->
                <nav>
                    <a href="#menu" class="a-menu">Menu <i class="ion-android-menu"></i> </a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <div class="inner">
                    <h2>Menu</h2>
                    <ul class="links">
                        <li><a href="home">Home</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="dataspesialis">Daftar Spesialis</a></li>
                        <li><a href="datadokter">Daftar Dokter</a></li>
                      <!--    <li><a href="datajaga">Jadwal Dokter</a></li>
                      <li><a href="cv">My CV</a></li>
                        <li><a href="datamurid">Crud</a></li>
                        <li><a href="datatamu">Guest Book</a></li> -->

                        <!-- <li><a href="#">Log In</a></li>
                        <li><a href="#">Sign Up</a></li> -->
                    </ul>
                    <a href="#" class="close">Close</a>
                </div>
            </nav>
        </div>

        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2></h2>
                    </div>
                </div>
<!--
                <div class="row">
                    <div class="col-md-12"> 
                        <p>Software Engineering Smkn 24 Jakarta <a href=""> - </a></p>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-banner">DEFAULT</a>
                    </div>
                </div> -->
            </div>
        </section>

 @yield('content')

       
                <div class="footer-features">
                    <div class="row">
                     <!--   <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="name name" class="form-control form-footer" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" required="" class="form-control form-footer" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-solid-state">Send Message</button>
                            </form>
                        </div>  -->

@yield('footer')                       
                        
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-12">
                      <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>






</body>
  
</html>