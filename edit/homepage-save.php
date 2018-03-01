<?php


$headlineImage_set = $_POST['headlineImage'];
$headlineImage_set2 = stripslashes($headlineImage_set);
$set1 = fopen("../content/squeeze/headlineImage.txt", "w"); 
fwrite($set1, $headlineImage_set2); 
fclose($set1); 

$productImage_set = $_POST['productImage'];
$productImage_set2 = stripslashes($productImage_set);
$set2 = fopen("../content/squeeze/productImage.txt", "w"); 
fwrite($set2, $productImage_set2); 
fclose($set2); 

$ctaButton_set = $_POST['ctaButton'];
$set3 = fopen("../content/squeeze/ctaButton.txt", "w"); 
fwrite($set3, $ctaButton_set); 
fclose($set3); 


$arrowImage_set = $_POST['arrowImage'];
$set4 = fopen("../content/squeeze/arrowImage.txt", "w"); 
fwrite($set4, $arrowImage_set); 
fclose($set4); 

$bulletHeading1_set = $_POST['bulletHeading1'];
$bulletHeading1_set2 = stripslashes($bulletHeading1_set);
$set5 = fopen("../content/squeeze/bulletHeading1.txt", "w"); 
fwrite($set5, $bulletHeading1_set2); 
fclose($set5); 

$bulletHeading2_set = $_POST['bulletHeading2'];
$bulletHeading2_set2 = stripslashes($bulletHeading2_set);
$set6 = fopen("../content/squeeze/bulletHeading2.txt", "w"); 
fwrite($set6, $bulletHeading2_set2); 
fclose($set6); 

$bulletHeading3_set = $_POST['bulletHeading3'];
$bulletHeading3_set2 = stripslashes($bulletHeading3_set);
$set7 = fopen("../content/squeeze/bulletHeading3.txt", "w"); 
fwrite($set7, $bulletHeading3_set2); 
fclose($set7); 

$bulletBody1_set = $_POST['bulletBody1'];
$bulletBody1_set2 = stripslashes($bulletBody1_set);
$set8 = fopen("../content/squeeze/bulletBody1.txt", "w"); 
fwrite($set8, $bulletBody1_set2); 
fclose($set8);

$bulletBody2_set = $_POST['bulletBody2'];
$bulletBody2_set2 = stripslashes($bulletBody2_set);
$set9 = fopen("../content/squeeze/bulletBody2.txt", "w"); 
fwrite($set9, $bulletBody2_set2); 
fclose($set9);

$bulletBody3_set = $_POST['bulletBody3'];
$bulletBody3_set2 = stripslashes($bulletBody3_set);
$set10 = fopen("../content/squeeze/bulletBody3.txt", "w"); 
fwrite($set10, $bulletBody3_set2); 
fclose($set10);

$mainHeading_set = $_POST['mainHeading'];
$mainHeading_set2 = stripslashes($mainHeading_set);
$set11 = fopen("../content/squeeze/mainHeading.txt", "w"); 
fwrite($set11, $mainHeading_set2); 
fclose($set11);

$mainBody_set = $_POST['mainBody'];
$mainBody_set2 = stripslashes($mainBody_set);
$set12 = fopen("../content/squeeze/mainBody.txt", "w"); 
fwrite($set12, $mainBody_set2); 
fclose($set12);

$quoteMain_set = $_POST['quoteMain'];
$quoteMain_set2 = stripslashes($quoteMain_set);
$set13 = fopen("../content/squeeze/quoteMain.txt", "w"); 
fwrite($set13, $quoteMain_set2); 
fclose($set13);

$quoteName_set = $_POST['quoteName'];
$quoteName_set2 = stripslashes($quoteName_set);
$set14 = fopen("../content/squeeze/quoteName.txt", "w"); 
fwrite($set14, $quoteName_set2); 
fclose($set14);


?>

<script type="text/javascript">
<!--
window.location = "index.php"
//-->
</script>