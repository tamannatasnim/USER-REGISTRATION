
<?php 
 include'connection.php';
$string=exec('getmac');
$mac=substr($string, 0, 17); 
echo $mac;
?> 
<br>
<?php echo "IP Address";
?>
