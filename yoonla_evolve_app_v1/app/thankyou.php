<?php
include("content/settings/index.php");
include("content/download/index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $metaTitle; ?></title>
<meta name="description" content="<?php echo $metaDesc; ?>" />
<meta name="keywords" content="<?php echo $metaKeywords; ?>" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php echo $trackingHeader; ?>

<style type="text/css">
<!--

body {
	background-image: url(images/repeater<?php echo $themeColor; ?>.png);
	background-repeat: repeat-x;
	margin-top: 0px;
	font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
	font-size: 14px;
}

-->
</style>

<SCRIPT LANGUAGE="JavaScript">
<!-- Idea by:  Nic Wolfe -->
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=825,height=485,left = 553.5,top = 357.5');");
}
// End -->
</script>


</head>

<body>

<div id="wrapper">

	<div id="headerLogoArea">
    
  <div id="logoHere"  style="float:left; margin-top:20px; margin-left:-15px;" >
        	<img src="images/logo<?php echo $themeColor; ?>.png"  width="325" height="78" />
        </div>
        
<div id="subtleArrow" style="float:left; margin-left:260px;">
                	<img src="images/arrow<?php echo $themeColor; ?>.png" />
        </div>
        
        <br clear="left" />
    
  </div>
    
    <div id="mainOptinArea">
    
    		<div id="headlineArea" style="float:left; margin-top:35px;">
            
           
            
           	  <img src="<?php echo $downloadHeadline; ?>" border="0" /><br />
              <a href="javascript:popUp('creator/index.php')"><img src="images/downloadBTN<?php echo $downloadBTN; ?>.png" border="0" /></a>

             
  
            </div>
            
            <div id="optinArea" style="float:left; margin-top:35px; margin-left:30px;">
            	<img src="<?php echo $confirmHeadline; ?>" width="359" height="284" />
	  </div>
            
            <br clear="left" />
    
    </div>
    
    <div id="mainCopyArea" style="margin-top:50px;">
    
    	<div id="affiliatenotice" align="center">
        	<span style="color:#404040; font-size:24px; font-weight:bold;"><em><?php echo $sponsorHeadline; ?></em></span>
        </div>
    
    
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="205">
        <div class="reviewblock" style=" width:205px;">
        	
            <div align="center" style="font-size:16px; margin-bottom:10px; font-weight:bold;"><?php echo $affHeadline1; ?></div>
            
            <a href="<?php echo $affURL1; ?>"><img src="<?php echo $affBanner1; ?>" border="0" width="205" /></a>
        	<img src="images/star<?php echo $affRating1; ?>.png" style="margin-top:10px;" />
            
            <div align="center" style="margin-top:10px;">
            <span class="quote">“<?php echo $affQuote1; ?>”</span>
            </div>
            
            <div align="center">
            <a href="<?php echo $affURL1; ?>" ><img src="images/checksite.png" border="0" style="margin-top:10px;" /></a>
        	</div>
            
        </div>
        </td>
        
         <td width="205">
        <div class="reviewblock" style=" width:205px;">
        	
            <div align="center" style="font-size:16px; margin-bottom:10px; font-weight:bold;"><?php echo $affHeadline2; ?></div>
            
            <a href="<?php echo $affURL2; ?>"><img src="<?php echo $affBanner2; ?>" border="0" width="205" /></a>
        	<img src="images/star<?php echo $affRating2; ?>.png" style="margin-top:10px;" />
            
            <div align="center" style="margin-top:10px;">
            <span class="quote">“<?php echo $affQuote2; ?>”</span>
            </div>
            
            <div align="center">
            <a href="<?php echo $affURL2; ?>" ><img src="images/checksite.png" border="0" style="margin-top:10px;" /></a>
        	</div>
            
        </div>
        </td>
        
         <td width="205">
        <div class="reviewblock" style=" width:205px;">
        	
            <div align="center" style="font-size:16px; margin-bottom:10px; font-weight:bold;"><?php echo $affHeadline3; ?></div>
            
            <a href="<?php echo $affURL3; ?>"><img src="<?php echo $affBanner3; ?>" border="0" width="205" /></a>
        	<img src="images/star<?php echo $affRating3; ?>.png" style="margin-top:10px;" />
            
            <div align="center" style="margin-top:10px;">
            <span class="quote">“<?php echo $affQuote3; ?>”</span>
            </div>
            
            <div align="center">
            <a href="<?php echo $affURL3; ?>" ><img src="images/checksite.png" border="0" style="margin-top:10px;" /></a>
        	</div>
            
        </div>
        </td>
        
         <td width="205">
        <div class="reviewblock" style=" width:205px;">
        	
            <div align="center" style="font-size:16px; margin-bottom:10px; font-weight:bold;"><?php echo $affHeadline4; ?></div>
            
            <a href="<?php echo $affURL4; ?>"><img src="<?php echo $affBanner4; ?>" border="0" width="205" /></a>
        	<img src="images/star<?php echo $affRating4; ?>.png" style="margin-top:10px;" />
            
            <div align="center" style="margin-top:10px;">
            <span class="quote">“<?php echo $affQuote4; ?>”</span>
            </div>
            
            <div align="center">
            <a href="<?php echo $affURL4; ?>" ><img src="images/checksite.png" border="0" style="margin-top:10px;" /></a>
        	</div>
            
        </div>
        </td>
     
      </tr>
    </table>

    	
    </div>
    
    <div id="TestimonialArea" style="margin-top:40px;" align="center">
    
    	<span class="quote">“<?php echo $main2Quote; ?>”</span><br /><br />
		<span style=" color:#666; font-size:12px; font-weight:bold;"><?php echo $main2QuoteName; ?></span>
    
    </div>
    
    <div id="footerArea" style="margin-top:10px;" align="center">
    	<span style=" color:#999; font-size:10px;"><?php echo $footer; ?></span>
    </div>



</div>

</body>
<?php echo $trackingFooter; ?>
</html>
