<html>
<head>
    <title>
        Attendence
    </title>
    <link href="https://fonts.googleapis.com/css?family=Arvo|Basic|Caudex|Raleway|Orbitron|Montserrat" rel="stylesheet">

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- SweetAlert -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>style/css/style.css">
</head>
<body>

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo|Basic|Caudex|Raleway|Cabin+Sketch" rel="stylesheet">
<div class="navbar navbar-default navbar-static-top">
    <div class="container" id="headMenu">
        <a href="index.php" class="navbar-brand" style="margin-top:10px;">
            <b><strong><span style="color: black">SWAG</span><span style="color: #800000;font-size: 32px">LABS</span></strong></b>
        </a>

        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse navHeaderCollapse" style="margin-top:10px;">
            <ul class="nav navbar-nav navbar-left" style="font-family: 'Cabin Sketch', sans-serif; font-size:13pt;font-weight: bold;">
                <li>
                    <a href="#">JackPot</a>
                </li>
                <li>
                    <a href="#">CoinFlip</a>
                </li>
                <li>
                    <a href="about-us.php">AboutUs</a>
                </li>
                <li>
                    <a href="contact-us.php">ContactUs</a>
                </li>


            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li style="margin-right: 8px;">
                    <a href="#" title="Follow us on Twitter!" target="_blank">
                        <i class="fa fa-twitter fa-2x"  aria-hidden="true"></i>
                    </a>
                </li>
                <li style="margin-right: 8px;margin-top:4px;">
                    <a href="#" title="Follow us on Facebook!" target="_blank">
                        <i class="fa fa-facebook fa-2x" style="font-size:20px;" aria-hidden="true"></i>
                    </a>
                </li>
                <li style="margin-right: 8px;">
                    <a href="#" title="Follow us on GooglePlus!" target="_blank">
                        <i class="fa fa-google-plus  fa-2x" style="font-style:5px;"  aria-hidden="true"></i>
                    </a>
                </li>
                <li class="login" style="display: block;">
                    <a href="<?=site_url('admin')?>" title="Logout" >
                        <i class="fa fa-sign-in fa-2x" style="font-style:5px;"  aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
