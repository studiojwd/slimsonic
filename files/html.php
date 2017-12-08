<?php include_once( "constants.php" ); ?>
<?
$TIME = time() + TIME_DIFF;
$FILE = preg_replace( "/index/", "Home", basename( $_SERVER[ 'PHP_SELF' ], ".php" ));
$TITLE = preg_replace( "/_/", " ", $FILE );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $tpTitle ?></title>
  <meta name="description" content="<?php echo $pgDesc ?>"></meta>
  <meta name="keywords" content="<?php echo $pgKeywords ?>"></meta>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="robot" content="index,follow">
  <meta name="revisit-after" content="10">
  <meta name="copyright" content="Copyright 2010, JWDesign.eu All rights reserved">
  <link type="text/css" media="all" rel="stylesheet" href="files/index.css" />
  <meta name="google-site-verification" content="ZSO4sc-V2theVLQD6S7H4W-y8x_SbNT3I2UPHmh_ijI" />

  <meta name="google-site-verification" content="a3trQIXo7mN3DNBBJbONgVWuDoZmN5ngY0tBNXSpj8s" />
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" media="all" href="files/ie_bugs.css" />
  <![endif]-->
<script type="text/javascript" src="files/head.js" ></script>
  <link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
<?php include 'rss.php'; ?>
  <div class="wrapper">
    <div class="ie_float_bug"></div>
    <div class="header"></div>
    <div class="menu">
      <a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
      <a href="How_It_Works.php">How It Works</a>&nbsp;&nbsp;&nbsp;
      <a href="Results.php">Results</a>&nbsp;&nbsp;&nbsp;
      <a href="Videos.php">Videos</a>&nbsp;&nbsp;&nbsp;
      <a href="Testimonials.php">Testimonials</a>&nbsp;&nbsp;&nbsp;
      <a href="FAQs.php">FAQs</a>&nbsp;&nbsp;&nbsp;
      <a href="Slimaction_Gel.php">Slimaction Gel</a>&nbsp;&nbsp;&nbsp;
      <a href="Buy_Now.php">Buy Now!</a>&nbsp;&nbsp;&nbsp;
    </div>
    <div class="content clear" id="<?=$FILE?>">
        <? @include_once "pages/" . $FILE . ".html"; ?>
        <? @include_once "pages/" . $FILE . ".php"; ?>
    </div>

    <div class="footer">
      <div class="copyright">
        &copy; 2010, Designed by <a href="http://www.jwdesign.eu" target="_blank" rel="nofollow">JWDesign.eu</a>
      </div>
    </div>
  </div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-243403-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
