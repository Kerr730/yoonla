<?php
include("content/settings/index.php");
include("content/squeeze/index.php");
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
    
    		<div id="headlineArea" style="float:left; margin-top:20px;">
           	  <img src="<?php echo $headlineImage; ?>" width="476" height="300" />
            </div>
            
            <div id="optinArea" style="float:left; margin-top:20px; margin-left:35px;">
            	<img src="<?php echo $productImage; ?>" width="336" height="140" />
                
              <div id="optinform" style="margin-top:10px;">
                
            <form method="post" action="content/optin.php">
        
        	<div id="fieldArea">
        	    <input type="text" id="optField" name="email">
       		 </div>
            <input type="image" src="images/btn<?php echo $ctaButton; ?>.png" style="margin-top:5px;"> 
            </form>
                
                </div>
                
              <div align="center" style="margin-top:5px;">
                <img src="images/privacy.png" />
                </div>
                
            </div>
            
            <br clear="left" />
    
    </div>
    
    <div id="mainCopyArea" style="margin-top:60px;">
    
    	<div id="bulletPointArea" style="float:left; width:440px;">
        
        <table width="440" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><img src="images/bullet<?php echo $arrowImage; ?>.png" width="32" height="32"  /></td>
            <td valign="top">
            <div style="margin-left:20px;">
            <span class="bulletName" style="font-size:18px;"><strong> <?php echo $bulletHeading1; ?> </strong></span>
            <br /><span style="font-size:14px; color:#666;"> <?php echo $bulletBody1; ?></span>
            </div>
            </td>
          </tr>
        </table>
        
        <table width="440" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px;" >
          <tr>
            <td valign="top"><img src="images/bullet<?php echo $arrowImage; ?>.png" width="32" height="32"  /></td>
            <td valign="top">
            <div style="margin-left:20px;">
            <span class="bulletName" style="font-size:18px;"><strong> <?php echo $bulletHeading2; ?> </strong></span>
            <br /><span style="font-size:14px; color:#666;"> <?php echo $bulletBody2; ?></span>
            </div>
            </td>
          </tr>
        </table>
        
        <table width="440" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px;">
          <tr>
            <td valign="top"><img src="images/bullet<?php echo $arrowImage; ?>.png" width="32" height="32"  /></td>
            <td valign="top">
            <div style="margin-left:20px;">
            <span class="bulletName" style="font-size:18px;"><strong> <?php echo $bulletHeading3; ?> </strong></span>
            <br /><span style="font-size:14px; color:#666;"> <?php echo $bulletBody3; ?></span>
            </div>
            </td>
          </tr>
        </table>

        
        	
        	
	  </div>
        
        <div id="blurbArea" style="float:left; width:350px; margin-left:70px;">
        <h1 style="font-size:18px;"><?php echo $mainHeading; ?> </h1>
        <p style="font-size:14px; color:#666;">
<?php echo $mainBody; ?></p>
    </div>
        
        <br clear="left" />
    
    </div>
    
    <div id="TestimonialArea" style="margin-top:40px;" align="center">
    
    	<span class="quote">“<?php echo $quoteMain; ?>”</span><br /><br />
		<span style=" color:#666; font-size:12px; font-weight:bold;"><?php echo $quoteName; ?></span>
    
    </div>
    
    <div id="footerArea" style="margin-top:10px;" align="center">
    	<span style=" color:#999; font-size:10px;"><?php echo $footer; ?></span>
    </div>



</div>

</body>

<?php echo $trackingFooter; ?>
</html>
