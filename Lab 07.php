<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p {
color: white; font-size:50px;
position: absolute; top: 40%;
left: 50%;
transform: translate(-50%, -50%);
}
body{background-color:black;}
</style>
<p> The srever time is:</br>
<?php echo date (" h: i : s A");?>

The local time is:</br>
<?php date_default_timezone_set('asia/kolkata');
echo date (" h: i : s A");?>
</p>
</head>
</html>