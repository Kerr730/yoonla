<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preview Of Your Download page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	background-image: url(images/previewTOP.png);
	background-repeat: repeat-x;
}
#previewFrame {
	height: 600px;;
	width: 1200px;;
}
-->
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
   $("#previewFrame").load("../thankyou.php");
  });
</script>



</head>

<body>

<frameset rows="75px,*" frameborder="0">
	<frame src="preview-download-bar.php" />
	<frame src="../thankyou.php" />
</frameset>




<!--<div id="previewFrame" >

<!--<iframe src="../thankyou.php" width="100%" height="100%" frameborder="0">
  <p>Your browser does not support iframes.</p>
</iframe>-->






</body>
</html>
