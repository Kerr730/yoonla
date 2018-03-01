<?php

chmod("../content/settings/footer.txt", 0666);
$file1 = "../content/settings/footer.txt"; //Path to your *.txt file
$contents1 = file($file1);
$footer = implode($contents1);

chmod("../content/settings/linkbackURL.txt", 0666);
$file2 = "../content/settings/linkbackURL.txt"; //Path to your *.txt file
$contents2 = file($file2);
$linkbackURL = implode($contents2);

chmod("../content/settings/linkbackTXT.txt", 0666);
$file3 = "../content/settings/linkbackTXT.txt"; //Path to your *.txt file
$contents3 = file($file3);
$linkbackTXT = implode($contents3);

chmod("../content/settings/metaTitle.txt", 0666);
$file4 = "../content/settings/metaTitle.txt"; //Path to your *.txt file
$contents4 = file($file4);
$metaTitle = implode($contents4);

chmod("../content/settings/metaKeywords.txt", 0666);
$file5 = "../content/settings/metaKeywords.txt"; //Path to your *.txt file
$contents5 = file($file5);
$metaKeywords = implode($contents5);

chmod("../content/settings/metaDesc.txt", 0666);
$file6 = "../content/settings/metaDesc.txt"; //Path to your *.txt file
$contents6 = file($file6);
$metaDesc = implode($contents6);

chmod("../content/settings/trackingHeader.txt", 0666);
$file7 = "../content/settings/trackingHeader.txt"; //Path to your *.txt file
$contents7 = file($file7);
$trackingHeader = implode($contents7);

chmod("../content/settings/trackingFooter.txt", 0666);
$file8 = "../content/settings/trackingFooter.txt"; //Path to your *.txt file
$contents8 = file($file8);
$trackingFooter = implode($contents8);

chmod("../content/settings/themeColor.txt", 0666);
$file9 = "../content/settings/themeColor.txt"; //Path to your *.txt file
$contents9 = file($file9);
$themeColor = implode($contents9);

chmod("../content/settings/logoURL.txt", 0666);
$file10 = "../content/settings/logoURL.txt"; //Path to your *.txt file
$contents10 = file($file10);
$logoURL = implode($contents10);

chmod("../content/settings/optinCode.txt", 0666);
$file11 = "../content/settings/optinCode.txt"; //Path to your *.txt file
$contents11 = file($file11);
$optinCode = implode($contents11);


?>