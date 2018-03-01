<?php

include("../content/settings/index-edit.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Settings</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrapper">

	<div id="headerArea"> <a href="index.php"><img src="images/header.png" width="918" height="91" border="0" /></a>
        <a href="index.php"><img src="images/toppart.png" width="918" height="60" border="0" /></a>
</div>

	<div id="adminAREA">
    
    	<div id="introPage">
         	<span style="font-size:14px;"><strong>Edit Your Site Settings</strong> - Setting up the core of your site - please do first!</span>
</div>
        
        <div class="stepArea" style="margin-top:40px;">
        
        <form method="post" action="settings-save.php">



            
            <div class="contentStep">
            	
                <div class="stepheadline">
                	
                    <div class="titleStep">
  <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Step 1: Meta Settings</strong></span> - Basic SEO settings for your Evolve site to show in the search engines</div>
                
                
                
                    
                    <div style="font-size:14px; color:#666; margin-left:30px;">
                    <input type="text" value='<?php echo $metaTitle; ?>' name="metaTitle" > <span style="margin-left:20px;"><em><strong>- Site Title</strong></em></span> <br />
					<input type="text" value='<?php echo $metaKeywords; ?>'  name="metaKeywords" ><span style="margin-left:20px;"><em><strong>- Meta Keywords</strong></em></span> <br />
                    <input type="text" value='<?php echo $metaDesc; ?>'  name="metaDesc" ><span style="margin-left:20px;"><em><strong>- Meta Description</strong></em></span>
                    </div>
					
                </div>
                
                
                
                
                
                
            <div class="stepheadline" style="margin-top:30px;">
                	
                   <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Step 2: Basic Page Settings</strong></span> - Content settings for the overall site</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                  
                    <input type="text" value='<?php echo $footer; ?>' name="footer" > 
                    <span style="margin-left:20px;"><em><strong>- Main Headline</strong> (Above the video and optin box)</em></span> <br />
					<input type="text" value='<?php echo $linkbackURL; ?>'  name="linkbackURL" >
					<span style="margin-left:20px;"><em><strong>- Optin Headline</strong> (Just above the optin form)</em></span> <br />
                    <input type="text" value='<?php echo $linkbackTXT; ?>' name="linkbackTXT" >
                    <span style="margin-left:20px;"><em><strong>- Footer Text</strong> (what you want it to say in the footer)</em></span>
              </div>
                    
                    
                </div>
                
                

            
            <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
            <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Step 3: Optin Setup</strong></span> - Copy and paste your auto-responder form into the form</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                  	<div style="float:left; width:300px; margin-right:20px;">
                    
                    <input type="text" value='<?php echo $optinCode; ?>' name="optinCode">
                    </div>
                    <div style="float:left; margin-left:20px; width:400px;">
					<span ><em><strong>- Optin Form (GetResponse Campaign Token ID)</strong></em></span> - <a href="../images/optinprocess.png" target="_blank">See quick help guide</a><br /><br />
                    <span style="font-size:12px; ">Copy and paste the GetResponse campaign tokend ID into the form now. Make sure to only add the token ID such as <b>41OJQ </b> for example. Please watch the video and instructions here to learn how to do this. It is very important that you do this right!</span><br />
                    </div>
                    <br clear="left" />
              </div>
                    
              </div>
              
              <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Complete Basic Settings</strong></span> - If you have filled out each section, then your done this part!</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                  	<div style="float:left; width:300px; margin-right:20px;">
					<input type="image" src="../images/submit.png" style="margin-bottom:30px;"  >                    </div>
                  	<br clear="left" />
              </div>
                    
              </div>
            
            
            </div>
            
            
            </form>
        
        </div>
        
        
    
    
    </div>
    
    <div id="footerArea">
    	<img src="images/footer.png" width="918" height="48"  />
    </div>


</div>

</body>
</html>
