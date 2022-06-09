<html>
<head>
<meta charset="utf-8">
<strong><h1>Convert fahrenheit to Celcius</h1></strong>
</head>
<body align="center">
<center>
<form method="post">
<br><br><br>
 Enter Temprature in Fahrenheit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="far">
<br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 2em; background-color:  #f27669;">
<input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;">
   </center>
 
<?php
if(isset($_POST['submit']))
{
	$f= $_POST['far'];
	$c= ($f - 32) * (5/9);
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style='background-color: #e4ddcb'><center><label class='col-sm-2 control-label' >Temprature in Celcius =</label> <input class='easypositive' value=$c ></span></center>";
}		
	?>
</body>
</html>