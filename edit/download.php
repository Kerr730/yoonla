<?php

include("../content/download/index-edit.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Download Content</title>
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
         	<span style="font-size:14px;"><strong>Edit Your Download Page</strong> - Edit the Content/Copy For The Thank You Page(Download Page)</span>
</div>
        
        <div class="stepArea" style="margin-top:40px;">
        
        <form method="post" action="download-save.php">



            
            <div class="contentStep">
            	
                <div class="stepheadline">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Above The Fold Area</strong></span> - Edit the elements that above the fold</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                    <input type="text" value='<?php echo $downloadHeadline; ?>' name="downloadHeadline" > 
                    <span style="margin-left:20px;"><em><strong>- Download Headline</strong> (Change only if you uploaded your own!)</em></span> <br />
                    <div style="font-size:12px; margin-bottom:0px;">Download headline template: <a href="../content/psd/download-headline-template.psd"><strong>download-headline-template.psd</strong></a></div>
                    <br />
					<input type="text" value='<?php echo $confirmHeadline; ?>'  name="confirmHeadline" >
					<span style="margin-left:20px;"><em><strong>- Confirmation Headline</strong> (Change only if you uploaded your own!)</em></span> <br />
                    <div style="font-size:12px; margin-bottom:0px;">Download product image template: <a href="../content/psd/confirm-headline-template.psd"><strong>confirm-headline-template.psd</strong></a></div>
                    <br />
                     <select name="downloadBTN" class="themeColor">
                   <option value="1" selected="selected">Green</option>
                    <option value="2">Blue</option>
                    <option value="3">Red</option>
                    <option value="4">Black</option>
                    <option value="5">Orange</option>
                    </select> 
                    <span style="margin-left:20px;"><em><strong>- Launch Wizard Button</strong> (button they press to launch editor)</em></span>
                    </div>
                    
                </div>
                
                
                
                
                
                
            <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
  <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Affiliate/Sponsorship Area </strong></span> - Edit the affiliate/sponsorship areas of the page</div>
                
                
                
                    
                    <div style="font-size:14px; color:#666; margin-left:30px;">
                   <input type="text" value='<?php echo $sponsorHeadline; ?>'  name="sponsorHeadline" >
					<span style="margin-left:20px;"><em><strong>- Sponsor Headline</strong> (Below the fold)</em></span><br />

                    
                    <div class="bulletArea-Point">
                    
                    <div style="" class="bullettitle"><em><strong>Affiliate Area Section #1</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $affHeadline1; ?>'  name="affHeadline1" >
					<span style="margin-left:20px;"><em><strong>- Affiliate Name </strong>(shows above the banner ad)</em></span> <br />
                    <input type="text" value='<?php echo $affBanner1; ?>'  name="affBanner1" >
                    <span style="margin-left:20px;"><em><strong>- Banner Ad Image URL </strong>(url to banner ad - 205x180)</em></span><br />
                       <select name="affRating1" class="themeColor">
                   <option value="1" >1 out of 5</option>
                    <option value="2">2 out of 5</option>
                    <option value="3">3 out of 5</option>
                    <option value="4">4 out of 5</option>
                    <option value="5" selected="selected">5 out of 5</option>
                    </select> 
                  
                    <span style="margin-left:20px;"><em><strong>- Star Rating For Ad </strong>(out of 5)</em></span><br />
                    <input type="text" value='<?php echo $affQuote1; ?>'  name="affQuote1" >
                    <span style="margin-left:20px;"><em><strong>- Quick Quote </strong>(blurb under ad with your quick headline (no &quot;))</em></span><br />
                    <input type="text" value='<?php echo $affURL1; ?>'  name="affURL1" >
                    <span style="margin-left:20px;"><em><strong>- Affiliate URL </strong>(your affiliate link)</em></span><br />
                    
                    
                    </div>
                    
                    
                    
                    
                    
                    <div class="bulletArea-Point" style="margin-top:15px;">
                    
                    <div style="" class="bullettitle"><em><strong>Affiliate Area Section #2</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $affHeadline2; ?>'  name="affHeadline2" >
					<span style="margin-left:20px;"><em><strong>- Affiliate Name </strong>(shows above the banner ad)</em></span> <br />
                    <input type="text" value='<?php echo $affBanner2; ?>'  name="affBanner2" >
                    <span style="margin-left:20px;"><em><strong>- Banner Ad Image URL </strong>(url to banner ad - 205x180)</em></span><br />
                       <select name="affRating2" class="themeColor">
                   <option value="1" >1 out of 5</option>
                    <option value="2">2 out of 5</option>
                    <option value="3">3 out of 5</option>
                    <option value="4">4 out of 5</option>
                    <option value="5" selected="selected">5 out of 5</option>
                    </select> 
                  
                    <span style="margin-left:20px;"><em><strong>- Star Rating For Ad </strong>(out of 5)</em></span><br />
                    <input type="text" value='<?php echo $affQuote2; ?>'  name="affQuote2" >
                    <span style="margin-left:20px;"><em><strong>- Quick Quote </strong>(blurb under ad with your quick headline (no &quot;))</em></span><br />
                    <input type="text" value='<?php echo $affURL2; ?>'  name="affURL2" >
                    <span style="margin-left:20px;"><em><strong>- Affiliate URL </strong>(your affiliate link)</em></span><br />
                    
                    
                    </div>
                    
                    
                    
                    
                    <div class="bulletArea-Point" style="margin-top:15px;">
                    
                    <div style="" class="bullettitle"><em><strong>Affiliate Area Section #3</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $affHeadline3; ?>'  name="affHeadline3" >
					<span style="margin-left:20px;"><em><strong>- Affiliate Name </strong>(shows above the banner ad)</em></span> <br />
                    <input type="text" value='<?php echo $affBanner3; ?>'  name="affBanner3" >
                    <span style="margin-left:20px;"><em><strong>- Banner Ad Image URL </strong>(url to banner ad - 205x180)</em></span><br />
                       <select name="affRating3" class="themeColor">
                   <option value="1" >1 out of 5</option>
                    <option value="2">2 out of 5</option>
                    <option value="3">3 out of 5</option>
                    <option value="4">4 out of 5</option>
                    <option value="5" selected="selected" >5 out of 5</option>
                    </select> 
                  
                    <span style="margin-left:20px;"><em><strong>- Star Rating For Ad </strong>(out of 5)</em></span><br />
                    <input type="text" value='<?php echo $affQuote3; ?>'  name="affQuote3" >
                    <span style="margin-left:20px;"><em><strong>- Quick Quote </strong>(blurb under ad with your quick headline (no &quot;))</em></span><br />
                    <input type="text" value='<?php echo $affURL3; ?>'  name="affURL3" >
                    <span style="margin-left:20px;"><em><strong>- Affiliate URL </strong>(your affiliate link)</em></span><br />
                    
                    
                    </div>
                    
                    
                    
                    <div class="bulletArea-Point" style="margin-top:15px;">
                    
                    <div style="" class="bullettitle"><em><strong>Affiliate Area Section #4</strong></em>  (edit this area)</div> <br />
      
					<input type="text" value='<?php echo $affHeadline4; ?>'  name="affHeadline4" >
					<span style="margin-left:20px;"><em><strong>- Affiliate Name </strong>(shows above the banner ad)</em></span> <br />
                    <input type="text" value='<?php echo $affBanner4 ?>'  name="affBanner4" >
                    <span style="margin-left:20px;"><em><strong>- Banner Ad Image URL </strong>(url to banner ad - 205x180)</em></span><br />
                       <select name="affRating4" class="themeColor">
                   <option value="1" >1 out of 5</option>
                    <option value="2">2 out of 5</option>
                    <option value="3">3 out of 5</option>
                    <option value="4">4 out of 5</option>
                    <option value="5" selected="selected">5 out of 5</option>
                    </select> 
                  
                    <span style="margin-left:20px;"><em><strong>- Star Rating For Ad </strong>(out of 5)</em></span><br />
                    <input type="text" value='<?php echo $affQuote4; ?>'  name="affQuote4" >
                    <span style="margin-left:20px;"><em><strong>- Quick Quote </strong>(blurb under ad with your quick headline (no &quot;))</em></span><br />
                    <input type="text" value='<?php echo $affURL4; ?>'  name="affURL4" >
                    <span style="margin-left:20px;"><em><strong>- Affiliate URL </strong>(your affiliate link)</em></span><br />
                    
                    
                    </div>
                    
                    
                    
                    
                    
                   
                    </div>
                    
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
<div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Bottom Testimonial Quote Area</strong></span> - Edit the testimonial area (doesn't need to be a testimonial)</div>
                
                
                
                    
                  <div style="font-size:14px; color:#666; margin-left:30px;">
                   <input type="text" value='<?php echo  $main2Quote; ?>'  name="main2Quote" >
					<span style="margin-left:20px;"><em><strong>- Main Quote</strong></em></span> (no quotes)<br />
                    <input type="text" value='<?php echo $main2QuoteName; ?>'  name="main2QuoteName" >
                    <span style="margin-left:20px;"><em><strong>- Lower Smaller Quote Name</strong></em></span>
             
                    </div>
                    
                </div>
                
            
            
            
            
            
            
            
              
              <div class="stepheadline" style="margin-top:30px;">
                	
                    <div class="titleStep">
                <span style=""><img src="images/check.png" style="margin-bottom:-7px; margin-right:5px;" /><strong>Complete Homepage Settings</strong></span> - If you have filled out each section, then your done this part!</div>
                
                
                
                    
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
