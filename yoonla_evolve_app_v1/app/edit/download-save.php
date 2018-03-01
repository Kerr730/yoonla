<?php


$downloadHeadline_set = $_POST['downloadHeadline'];
$downloadHeadline_set2 = stripslashes($downloadHeadline_set);
$set1 = fopen("../content/download/downloadHeadline.txt", "w"); 
fwrite($set1, $downloadHeadline_set2); 
fclose($set1); 

$confirmHeadline_set = $_POST['confirmHeadline'];
$confirmHeadline_set2 = stripslashes($confirmHeadline_set);
$set2 = fopen("../content/download/pconfirmHeadline.txt", "w"); 
fwrite($set2, $confirmHeadline_set2); 
fclose($set2); 

$downloadBTN_set = $_POST['downloadBTN'];
$set3 = fopen("../content/download/downloadBTN.txt", "w"); 
fwrite($set3, $downloadBTN_set); 
fclose($set3); 


$sponsorHeadline_set = $_POST['sponsorHeadline'];
$sponsorHeadline_set2 = stripslashes($sponsorHeadline_set);
$set4 = fopen("../content/download/sponsorHeadline.txt", "w"); 
fwrite($set4, $sponsorHeadline_set2); 
fclose($set4); 

$main2Quote_set = $_POST['main2Quote'];
$main2Quote_set2 = stripslashes($main2Quote_set);
$set5 = fopen("../content/download/main2Quote.txt", "w"); 
fwrite($set5, $main2Quote_set2); 
fclose($set5); 

$main2QuoteName_set = $_POST['main2QuoteName'];
$main2QuoteName_set2 = stripslashes($main2QuoteName_set);
$set6 = fopen("../content/download/main2QuoteName.txt", "w"); 
fwrite($set6, $main2QuoteName_set2); 
fclose($set6); 

// aff HEADLINE

$affHeadline1_set = $_POST['affHeadline1'];
$affHeadline1_set2 = stripslashes($affHeadline1_set);
$set7 = fopen("../content/download/affHeadline1.txt", "w"); 
fwrite($set7, $affHeadline1_set2); 
fclose($set7); 

$affHeadline2_set = $_POST['affHeadline2'];
$affHeadline2_set2 = stripslashes($affHeadline2_set);
$set8 = fopen("../content/download/affHeadline2.txt", "w"); 
fwrite($set8, $affHeadline2_set2); 
fclose($set8);

$affHeadline3_set = $_POST['affHeadline3'];
$affHeadline3_set2 = stripslashes($affHeadline3_set);
$set9 = fopen("../content/download/affHeadline3.txt", "w"); 
fwrite($set9, $affHeadline3_set2); 
fclose($set9);

$affHeadline4_set = $_POST['affHeadline4'];
$affHeadline4_set2 = stripslashes($affHeadline4_set);
$set10 = fopen("../content/download/affHeadline4.txt", "w"); 
fwrite($set10, $affHeadline4_set2); 
fclose($set10);

// Aff Banner

$affBanner1_set = $_POST['affBanner1'];
$affBanner1_set2 = stripslashes($affBanner1_set);
$set11 = fopen("../content/download/affBanner1.txt", "w"); 
fwrite($set11, $affBanner1_set2); 
fclose($set11);

$affBanner2_set = $_POST['affBanner2'];
$affBanner2_set2 = stripslashes($affBanner2_set);
$set12 = fopen("../content/download/affBanner2.txt", "w"); 
fwrite($set12, $affBanner2_set2); 
fclose($set12);

$affBanner3_set = $_POST['affBanner3'];
$affBanner3_set2 = stripslashes($affBanner3_set);
$set13 = fopen("../content/download/affBanner3.txt", "w"); 
fwrite($set13, $affBanner3_set2); 
fclose($set13);

$affBanner4_set = $_POST['affBanner4'];
$affBanner4_set2 = stripslashes($affBanner4_set);
$set14 = fopen("../content/download/affBanner4.txt", "w"); 
fwrite($set14, $affBanner4_set2); 
fclose($set14);

// aff quotes

$affQuote1_set = $_POST['affQuote1'];
$affQuote1_set2 = stripslashes($affQuote1_set);
$set15 = fopen("../content/download/affQuote1.txt", "w"); 
fwrite($set15, $affQuote1_set2); 
fclose($set15);

$affQuote2_set = $_POST['affQuote2'];
$affQuote2_set2 = stripslashes($affQuote2_set);
$set16 = fopen("../content/download/affQuote2.txt", "w"); 
fwrite($set16, $affQuote2_set2); 
fclose($set16);

$affQuote3_set = $_POST['affQuote3'];
$affQuote3_set2 = stripslashes($affQuote3_set);
$set17 = fopen("../content/download/affQuote3.txt", "w"); 
fwrite($set17, $affQuote3_set2); 
fclose($set17);

$affQuote4_set = $_POST['affQuote4'];
$affQuote4_set2 = stripslashes($affQuote4_set);
$set18 = fopen("../content/download/affQuote4.txt", "w"); 
fwrite($set18, $affQuote4_set2); 
fclose($set18);

// aff rating

$affRating1_set = $_POST['affRating1'];
$set19 = fopen("../content/download/affRating1.txt", "w"); 
fwrite($set19, $affRating1_set); 
fclose($set19);

$affRating2_set = $_POST['affRating2'];
$set20 = fopen("../content/download/affRating2.txt", "w"); 
fwrite($set20, $affRating2_set); 
fclose($set20);

$affRating3_set = $_POST['affRating3'];
$set21 = fopen("../content/download/affRating3.txt", "w"); 
fwrite($set21, $affRating3_set); 
fclose($set21);

$affRating4_set = $_POST['affRating4'];
$set22 = fopen("../content/download/affRating4.txt", "w"); 
fwrite($set22, $affRating4_set); 
fclose($set22);

// aff URL

$affURL1_set = $_POST['affURL1'];
$affURL1_set2 = stripslashes($affURL1_set);
$set23 = fopen("../content/download/affURL1.txt", "w"); 
fwrite($set23, $affURL1_set2); 
fclose($set23);

$affURL2_set = $_POST['affURL2'];
$affURL2_set2 = stripslashes($affURL2_set);
$set24 = fopen("../content/download/affURL2.txt", "w"); 
fwrite($set24, $affURL2_set2); 
fclose($set24);

$affURL3_set = $_POST['affURL3'];
$affURL3_set2 = stripslashes($affURL3_set);
$set25 = fopen("../content/download/affURL3.txt", "w"); 
fwrite($set25, $affURL3_set2); 
fclose($set25);

$affURL4_set = $_POST['affURL4'];
$affURL4_set2 = stripslashes($affURL4_set);
$set26 = fopen("../content/download/affURL4.txt", "w"); 
fwrite($set26, $affURL4_set2); 
fclose($set26);




?>

<script type="text/javascript">
<!--
window.location = "index.php"
//-->
</script>