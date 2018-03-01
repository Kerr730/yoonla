<?php

include("../content/squeeze/index-edit.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Homepage Content</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrapper">

	<div id="headerArea">
    	<a href="index.php"><img src="images/header.png" width="918" height="91" border="0" /></a>
        <a href="index.php"><img src="images/toppart.png" width="918" height="60" border="0" /></a>
    </div>

	<div id="adminAREA">
    
    	<div id="introPage">
         	<span style="font-size:14px;"><strong>Edit Your Homepage</strong> - Edit the Content/Copy For The HomePage (Squeeze Page)</span>
</div>
        
        <div class="stepArea" style="margin-top:40px;">
        
        <form method="post" action="homepage-save.php">



            
            <div class="contentStep">
            	
                <div class="stepheadline">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Above The Fold Area</strong></span> - Edit the elements that above the fold</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                    <input type="text" value='<?php echo $headlineImage; ?>' name="headlineImage" > 
                    <span style="margin-left:20px;"><em><strong>- Graphical Headline</strong> (Change only if you uploaded your own!)</em></span> <br />
                    <div style="font-size:12px; margin-bottom:0px;">Download headline template: <a href="../content/psd/headline-template.psd"><strong>headline-template.psd</strong></a></div>
                    <br />
					<input type="text" value='<?php echo $productImage; ?>'  name="productImage" >
					<span style="margin-left:20px;"><em><strong>- Product Image</strong> (Change only if you uploaded your own!)</em></span> <br />
                    <div style="font-size:12px; margin-bottom:0px;">Download product image template: <a href="../content/psd/productshot-template.psd"><strong>productshot-template.psd</strong></a></div>
                    <br />
                     <select name="ctaButton" class="themeColor">
                   <option value="1" selected="selected">Get Instant Access! (blue)</option>
                    <option value="2">Get Instant Access! (green)</option>
                    <option value="3">Get Instant Access! (red)</option>
                    <option value="4">Get Instant Access! (orange)</option>
                    <option value="5">Sign Up Now For Free! (blue)</option>
                    <option value="6">Sign Up Now For Free! (green)</option>
                    <option value="7">Sign Up Now For Free! (red)</option>
                    <option value="8">Sign Up Now For Free! (orange)</option>
                    <option value="9">Create Your Free Site! (blue)</option>
                    <option value="10">Create Your Free Site! (green)</option>
                    <option value="11">Create Your Free Site! (red)</option>
                    <option value="12">Create Your Free Site! (orange)</option>
                    </select> 
                    <span style="margin-left:20px;"><em><strong>- CTA Button</strong> (select the cta phrase and color - 4 colors each)</em></span>
                    </div>
                    
                </div>
                
                
                
                
                
                
            <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
  <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Bullet List Area</strong></span> - Edit the bullet point information areas</div>
                
                
                
                    
                    <div style="font-size:14px; color:#666; margin-left:30px;">
                     <select name="arrowImage" class="themeColor">
                    <option value="1" selected="selected">Green Arrow (Sharp)</option>
                    <option value="2">Green Check Mark</option>
                    <option value="3">Green Plus Sign</option>
                    <option value="4">Green Arrow (Soft)</option>
                    <option value="5">Star</option>
                    </select>                          
                    
                    <span style="margin-left:20px;"><em><strong>- Arrow Images</strong></em></span> <br />

                    
                    <div class="bulletArea-Point">
                    
                    <div style="" class="bullettitle"><em><strong>Bullet Section #1</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $bulletHeading1; ?>'  name="bulletHeading1" >
					<span style="margin-left:20px;"><em><strong>- Bullet Point Heading</strong></em></span> <br />
                    <input type="text" value='<?php echo $bulletBody1; ?>'  name="bulletBody1" >
                    <span style="margin-left:20px;"><em><strong>- Bullet Body Copy</strong></em></span>
                    
                    
                    </div>
                    
                    <div class="bulletArea-Point" style="margin-top:15px;">
                    
                    <div style="" class="bullettitle"><em><strong>Bullet Section #2</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $bulletHeading2; ?>'  name="bulletHeading2" >
					<span style="margin-left:20px;"><em><strong>- Bullet Point Heading</strong></em></span> <br />
                    <input type="text" value='<?php echo $bulletBody2; ?>'  name="bulletBody2" >
                    <span style="margin-left:20px;"><em><strong>- Bullet Body Copy</strong></em></span>

                    </div>
                    
                      <div class="bulletArea-Point" style="margin-top:15px;">
                    
                    <div style="" class="bullettitle"><em><strong>Bullet Section #3</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $bulletHeading3; ?>'  name="bulletHeading3" >
					<span style="margin-left:20px;"><em><strong>- Bullet Point Heading</strong></em></span> <br />
                    <input type="text" value='<?php echo $bulletBody3; ?>'  name="bulletBody3" >
                    <span style="margin-left:20px;"><em><strong>- Bullet Body Copy</strong></em></span>

                    </div>
                    </div>
                    
                </div>
                
                
                
                
                
                
                
                
                
                <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
              <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Extra Copy</strong></span> - Edit the main bit of copy under the optin area</div>
                
                
                
                    
                    <div style="font-size:14px; color:#666; margin-left:30px;">
                    <input type="text" value='<?php echo $mainHeading; ?>' name="mainHeading" > 
                    <span style="margin-left:20px;"><em><strong>- Heading </strong></em></span> <br />
                    
                    <div style="float:left; width:300px; margin-right:20px;">
                    
                    <textarea style="height:100px; width:300px;" name="mainBody">
                    	<?php echo $mainBody; ?>
                    </textarea>
                    </div>
                    <div style="float:left; margin-left:20px; width:400px;">
					<span ><em><strong>- Body Copy Area</strong></em></span><br />
					<br />
                    <span style="font-size:12px;">Good fit for a video! (width: 344 height: 170+</span>)
                    </div>
                    <br clear="left" />
					
                    </div>
                    <br clear="left" />
                </div>
                
                
                
                
                
                
                <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Bottom Testimonial Quote Area</strong></span> - Edit the testimonial area (doesn't need to be a testimonial)</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                   <input type="text" value='<?php echo  $quoteMain; ?>'  name="quoteMain" >
					<span style="margin-left:20px;"><em><strong>- Main Quote</strong></em></span> (no quotes)<br />
                    <input type="text" value='<?php echo $quoteName; ?>'  name="quoteName" >
                    <span style="margin-left:20px;"><em><strong>- Lower Smaller Quote Name</strong></em></span>
             
                    </div>
                    
                </div>
                
            
            
            
            
            
            
            
              
              <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Complete Homepage Settings</strong></span> - If you have filled out each section, then your done this part!</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                  	<div style="float:left; width:300px; margin-right:20px;">
					<input type="image" src="../images/submit.png" style="margin-bottom:30px;"  >
                    </div>
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
