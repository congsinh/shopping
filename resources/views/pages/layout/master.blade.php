<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fashion shop">
    <meta name="author" content="">
    <base href="{{ asset('') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/cloud-zoom.css" rel="stylesheet">
    <link href="css/slicknav.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- fav -->
    <link rel="shortcut icon" href="assets/ico/favicon.html">
</head>

<body id="main">
<!-- Header Start -->
@include('pages.layout.header')
<!-- Header End -->
<div id="maincontainer">
    <!-- Slider Start-->
@yield('content')


</div>

@include('pages.layout.footer')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript"  src="js/jquery.slicknav.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script defer src="js/custom.js"></script>
<script type="text/javascript">

</script>
</body>
</html>