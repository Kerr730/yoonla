<?php


$footer_set = $_POST['footer'];
$footer_set2 = stripslashes($footer_set);
$set1 = fopen("../content/settings/footer.txt", "w"); 
fwrite($set1, $footer_set2); 
fclose($set1); 

$linkbackURL_set = $_POST['linkbackURL'];
$linkbackURL_set2 = stripslashes($linkbackURL_set);
$set2 = fopen("../content/settings/linkbackURL.txt", "w"); 
fwrite($set2, $linkbackURL_set2); 
fclose($set2); 

$linkbackTXT_set = $_POST['linkbackTXT'];
$linkbackTXT_set2 = stripslashes($linkbackTXT_set);
$set3 = fopen("../content/settings/linkbackTXT.txt", "w"); 
fwrite($set3, $linkbackTXT_set2); 
fclose($set3); 


$metaTitle_set = $_POST['metaTitle'];
$metaTitle_set2 = stripslashes($metaTitle_set);
$set4 = fopen("../content/settings/metaTitle.txt", "w"); 
fwrite($set4, $metaTitle_set2); 
fclose($set4); 

$metaKeywords_set = $_POST['metaKeywords'];
$metaKeywords_set2 = stripslashes($metaKeywords_set);
$set5 = fopen("../content/settings/metaKeywords.txt", "w"); 
fwrite($set5, $metaKeywords_set2); 
fclose($set5); 

$metaDesc_set = $_POST['metaDesc'];
$metaDesc_set2 = stripslashes($metaDesc_set);
$set6 = fopen("../content/settings/metaDesc.txt", "w"); 
fwrite($set6, $metaDesc_set2); 
fclose($set6); 

$trackingHeader_set = $_POST['trackingHeader'];
$trackingHeader_set2 = stripslashes($trackingHeader_set);
$set7 = fopen("../content/settings/trackingHeader.txt", "w"); 
fwrite($set7, $trackingHeader_set2); 
fclose($set7); 

$trackingFooter_set = $_POST['trackingFooter'];
$trackingFooter_set2 = stripslashes($trackingFooter_set);
$set8 = fopen("../content/settings/trackingFooter.txt", "w"); 
fwrite($set8, $trackingFooter_set2); 
fclose($set8);

$themeColor_set = $_POST['themeColor'];
$set9 = fopen("../content/settings/themeColor.txt", "w"); 
fwrite($set9, $themeColor_set); 
fclose($set9);

$optinCode_set =  $_POST['optinCode'];
$optinCode_set2 = stripslashes($optinCode_set);
$set10 = fopen("../content/settings/optinCode.txt", "w"); 
fwrite($set10, $optinCode_set2); 
fclose($set10);


?>


<script type="text/javascript">
<!--
window.location = "index.php"
//-->
</script>