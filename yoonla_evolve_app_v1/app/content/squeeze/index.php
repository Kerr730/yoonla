<?php
chmod("content/squeeze/headlineImage.txt", 0755);
$file1 = "content/squeeze/headlineImage.txt"; //Path to your *.txt file
$contents1 = file($file1);
$headlineImage = implode($contents1);

chmod("content/squeeze/productImage.txt", 0755);
$file2 = "content/squeeze/productImage.txt"; //Path to your *.txt file
$contents2 = file($file2);
$productImage = implode($contents2);

chmod("content/squeeze/ctaButton.txt", 0755);
$file3 = "content/squeeze/ctaButton.txt"; //Path to your *.txt file
$contents3 = file($file3);
$ctaButton = implode($contents3);

chmod("content/squeeze/arrowImage.txt", 0755);
$file4 = "content/squeeze/arrowImage.txt"; //Path to your *.txt file
$contents4 = file($file4);
$arrowImage = implode($contents4);

chmod("content/squeeze/bulletHeading1.txt", 0755);
$file5 = "content/squeeze/bulletHeading1.txt"; //Path to your *.txt file
$contents5 = file($file5);
$bulletHeading1 = implode($contents5);

chmod("content/squeeze/bulletBody1.txt", 0755);
$file6 = "content/squeeze/bulletBody1.txt"; //Path to your *.txt file
$contents6 = file($file6);
$bulletBody1 = implode($contents6);

chmod("content/squeeze/bulletHeading2.txt", 0755);
$file7 = "content/squeeze/bulletHeading2.txt"; //Path to your *.txt file
$contents7 = file($file7);
$bulletHeading2 = implode($contents7);

chmod("content/squeeze/bulletBody2.txt", 0755);
$file8 = "content/squeeze/bulletBody2.txt"; //Path to your *.txt file
$contents8 = file($file8);
$bulletBody2 = implode($contents8);

chmod("content/squeeze/bulletHeading3.txt", 0755);
$file9 = "content/squeeze/bulletHeading3.txt"; //Path to your *.txt file
$contents9 = file($file9);
$bulletHeading3 = implode($contents9);

chmod("content/squeeze/bulletBody3.txt", 0755);
$file10 = "content/squeeze/bulletBody3.txt"; //Path to your *.txt file
$contents10 = file($file10);
$bulletBody3 = implode($contents10);

chmod("content/squeeze/mainHeading.txt", 0755);
$file11 = "content/squeeze/mainHeading.txt"; //Path to your *.txt file
$contents11 = file($file11);
$mainHeading = implode($contents11);

chmod("content/squeeze/mainBody.txt", 0755);
$file12 = "content/squeeze/mainBody.txt"; //Path to your *.txt file
$contents12 = file($file12);
$mainBody = implode($contents12);

chmod("content/squeeze/quoteMain.txt", 0755);
$file13 = "content/squeeze/quoteMain.txt"; //Path to your *.txt file
$contents13 = file($file13);
$quoteMain = implode($contents13);

chmod("content/squeeze/quoteName.txt", 0755);
$file14 = "content/squeeze/quoteName.txt"; //Path to your *.txt file
$contents14 = file($file14);
$quoteName = implode($contents14);
?>