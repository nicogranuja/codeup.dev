
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrapwelcome2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
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
                        <a href="/aboutme.php">About Me</a>
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

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Hi there Welcome!</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What I do</h2>
                <p>Web developer in formation.</p>
                <p>
                Some wise words:
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="/portfolio.php">Learn More &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Me</h2>
                <address>
                    <strong>Info</strong>
                    <br>address here
                    <br>San Antonio, TX 78232 
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(361) 349-XXXX
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:nicogranuja@hotmail.com">nicogranuja@hotmail.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="/img/designPic.jpg" alt="Design">
                <h2>Front End Design</h2>
                <p>Designing WebPages Info.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="/img/backendPic.jpg" alt="Programming Pic">
                <h2>Back End Programming</h2>
                <p>Info about the programming languages etc.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="/img/database.jpg" alt="database">
                <h2>Database Management</h2>
                <p>Database Info.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquerywelcome2.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrapwelcome2.js"></script>

</body>

</html>
