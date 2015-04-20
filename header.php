<?php

function myErrorHandler($errno, $errstr, $errfile, $errline) {
  if ( E_RECOVERABLE_ERROR===$errno ) {
    return true;
  }
  return false;
}
set_error_handler('myErrorHandler');

try {
	$spaceapiJson = file_get_contents("http://57north.co/spaceapi");
	$spaceapi = json_decode($spaceapiJson);
        if ( $spaceapi->state->open == "true" ) {
		$state = "open";
	} else {
		$state = "closed";
	}
	$message = $spaceapi->state->message;
	if ( $message == "" ) { $message = "(no message)"; }
} catch (Exception $e) { $state = "?"; $message = "?"; }

?><!DOCTYPE html>
<html lang="en"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php if ( $page != "Home" ) { echo $page." &raquo; 57North Hacklab"; } else { echo "57North Hacklab &raquo; Aberdeen's First Hackerspace"; } ?></title>

    <!-- Full calendar -->
    <link rel='stylesheet' type='text/css' href='/fullcalendar/fullcalendar.css' />
    <script type='text/javascript' src='/fullcalendar/fullcalendar.js'></script>


    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <?php if ( $page == "Home") { ?>
<meta name="google-site-verification" content="Y8NYR3j9Cg2FgDUBHtzcw8LPoVMpgUJn47yLQAhufDc" />
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
<meta property="og:title" content="57North Hacklab">
<meta property="og:type" content="non_profit">
<meta property="og:url" content="http://57north.org.uk/">
<meta property="og:image" content="http://57north.org.uk/img/facebook.png">
<meta property="og:description" content="57North is a hacker collective with a shared space located in Aberdeen, Scotland. We meet regularly to share knowledge, hack on projects together, and build community.">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:site" content="@57NorthHacklab">
<meta property="twitter:title" content="57North Hacklab">
<meta property="twitter:description" content="57North is a hacker collective with a shared space located in Aberdeen, Scotland. We meet regularly to share knowledge, hack on projects together, and build community.">
<meta property="twitter:image:src" content="http://57north.org.uk/img/facebook.png">
<meta property="twitter:domain" content="57north.org.uk">
<meta property="twitter:creator" content="@57NorthHacklab">

<meta name="keywords" content="57North, Hacklab, 57North Hacklab, Hackerspace, Hackspace, Aberdeen, Computing, Hacking, Electronics, Workshop">
    <?php } ?>
<meta name="description" content="<?php echo($description); ?>">
    <link href="css/lightbox.css" rel="stylesheet" media="screen">
    <link href="css/syntax/shCore.css" rel="stylesheet"  media="screen">
    <link href="css/syntax/shThemeDefault.css" rel="stylesheet"  media="screen">
    <link href="css/color-default.css" rel="stylesheet" media="screen" title="default">

    <?php if(rand(1, 100) > 98) { ?>
    <link href="css/style.hp.css" rel="stylesheet" media="screen" title="default">
    <?php } else { ?>
    <link href="css/style.css" rel="stylesheet" media="screen" title="default">
    <?php } ?>
    <link href="css/width-full.css" rel="stylesheet" media="screen" title="default">

    <link href="https://plus.google.com/+HackerdeenOrg" rel="publisher">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

    <![endif]-->
<script src="js/jquery-1.10.2.min.js"></script>
</head>

<body>

<!-- Facebook Modal -->
<div class="modal fade" id="facebookModal" tabindex="-1" role="dialog" aria-labelledby="facebookModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel">Your civil liberties are at stake</h4>
            </div>
            <div class="modal-body">
<div class="alert alert-danger">
WARNING: Facebook were previously known to violate your privacy!
</div>
The EFF have given Facebook 6/6 stars on their <a target="_blank" href="https://www.eff.org/who-has-your-back-2014/">privacy scorecard for 2014</a>, but previously they scored quite badly.
            </div>
            <div class="modal-footer">
                <a href="https://www.facebook.com/57NorthHacklab" target="_blank" class="btn btn-danger">Proceed to Facebook</a>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Google+ Modal -->
<div class="modal fade" id="googlePlusModal" tabindex="-1" role="dialog" aria-labelledby="googlePlusModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel">Your civil liberties are at stake</h4>
            </div>
            <div class="modal-body">
<div class="alert alert-danger">
WARNING: Google is known to violate your privacy!
</div>
The EFF have only given Google 5/6 stars on their <a target="_blank" href="https://www.eff.org/who-has-your-back-2013/">privacy scorecard for 2013</a>.
            </div>
            <div class="modal-footer">
                <a href="https://plus.google.com/+HackerdeenOrg" target="_blank" class="btn btn-danger">Proceed to Google+</a>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

    <div class="boxed animated fadeIn animation-delay-5">

        <header id="header" class="hidden-xs">
            <div class="container">

                <div style="text-align: right; padding-top: 30px; position:absolute; z-index:2; right: 10px;" class="animated fadeInDown hidden-xs">
                    <a href="https://twitter.com/57NorthHacklab" class="social-icon soc-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/+HackerdeenOrg" type="button" class="social-icon soc-google-plus animated fadeInDown animation-delay-2" data-toggle="modal" data-target="#googlePlusModal"><i class="fa fa-google-plus"></i></a>
                    <a href="https://facebook.com/57NorthHacklab" type="button" class="social-icon soc-facebook animated fadeInDown animation-delay-3" data-toggle="modal" data-target="#facebookModal"><i class="fa fa-facebook"></i></a><br>
		<div style="margin:0;">The space is currently <?php echo($state); ?>: "<?php echo($message); ?>"</div>
		</div>
                <div id="header-title" style="width: 100%;">
                    <h1 class="animated fadeInDown"><a href="/"><img src="img/logo.png" alt="57North Hacklab" style="width: 289px; height: 100px;"></a></h1>
                </div>
            </div> <!-- container -->
        </header> <!-- header -->

        <nav class="navbar navbar-static-top navbar-mind" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand visible-xs" href="/">57North <span>Hacklab</span></a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-inverse"></i>
                    </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-mind-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/regularevents">Regular Events</a></li>
                                <li><a href="/workshops">Workshops</a></li>
                                <li><a href="/themedthursdays">Themed Thursdays</a></li>
                                <li><a href="/calendar">Calendar</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                        <!-- li><a href="/projects">Projects</a></li -->
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contact</a></li>
			<li class="visible-xs"><a href="http://hackerspaces.shiftout.com/wiki/57North+Hacklab">Status</a></li>
                    </ul> <!-- nav nabvar-nav -->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Login</a>
                            <div class="dropdown-menu dropdown-login animated fadeInUp">
                                <form role="form" action="http://hackerdeen.org/hub/login" method="post">
                                    <h4 class="section-title">Hackhub Login</h4>
         
                                    <div class="form-group">
                                        <div class="input-group login-input">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                        <br>
                                        <div class="input-group login-input">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form> 
                            </div>
                        </li> <!-- dropdown -->
                        <li class="dropdown"><a href="https://wiki.57north.org.uk/">Wiki</a></li>
                        <li class="dropdown"><a href="http://planet.57north.org.uk/">Planet</a></li>
                    </ul> <!-- nav nabvar-nav -->
                </div><!-- navbar-collapse -->
            </div> <!-- container -->
        </nav> <!-- navbar navbar-default -->


