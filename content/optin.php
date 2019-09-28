<?php


$file1 = "settings/optinCode.txt"; //Path to your *.txt file
$contents1 = file($file1);
$optinCode = implode($contents1);

$email_address = $_POST['email'];
?>

<div style="margin-top:-50000000px;">
<?php
echo $bodytag = str_replace("%email%", "$email_address", "$optinCode;")
?>
</div>



<script language=javascript> 
			document.getElementById('optin').submit(); 
</script>