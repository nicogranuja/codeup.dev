
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrapwelcome2.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using 
            .navbar-static-top. Change if height of navigation changes. */
        }
        .img-languages
        {
            height:40px;
            width:40px;
            border:1px solid black;
        }
        span
        {
          font-weight: bold;  
        }

        footer
        {
            height:80px;
            background-color: #d9534f;
        }

    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/welcome2.php">Welcome Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li>
                        <a href="/aboutme.php">About</a>
                    </li> -->
                    <li>
                        <a href="/portfolio.php">Portfolio</a>
                    </li>
                    <li>
                        <a href="/resume.php">Resume</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>My Resume</h1>
                <hr>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-6">
                <img src="/img/linuxPic.png" class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px; border-width:60%;"  data-holder-rendered="true">
            </div>
            <div class="col-sm-6">

                Info about the picture here
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-sm-6">
            <h3>Skills</h3>
            <ul>
                <li>
                    Team Work
                </li>
                <li>
                    Lone Wolf
                </li>
                <li>
                    More stuff...
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Something important here</h3>
                <p>
                Graph here
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>
            </div>
            <!-- Technical knowledge pics and bars -->
            <div class="col-md-12" class="technicalKnowledge">
                <h3>Technical Knowledge</h3>

                <img src="/img/javascript.png" alt="javascript picture" class="img-languages">
                <img src="/img/html5.png" alt="html picture" class="img-languages">
                <img src="/img/css.png" alt="CSS picture" class="img-languages">
                <img src="/img/mysql.png" alt="Mysql picture" class="img-languages">
                <img src="/img/php.png" alt="PHP picture" class="img-languages">
                <span>Javascript, HTML, CSS, MySQL, PHP</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">80% Complete (danger)</span></div>
                 </div>
                <br>

                <img src="/img/c++.png" alt="c++ picture" class="img-languages">
                <span>C++</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"><span class="sr-only">60% Complete</span></div>
                </div>
                <br>

                <img src="/img/java.png" alt="java picture" class="img-languages">
                <span>Java</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only"></span></div>
                </div>
                <hr>
            </div>
            <!-- end of technical Knowledge -->
        </div>

        <!-- footer -->
        <footer>
            <div class="row" class="footer">
                    <div class="col-md-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
        </footer>
        <!-- footer --> 

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquerywelcome2.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrapwelcome2.js"></script>

</body>

</html>