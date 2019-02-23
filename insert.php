
<html> 
<head> 


</head>
<body> 
<form action="" method="POST">
	sdate <input type="date" name="sdate" value=""/>  <br><br>
	sday <input type="text" name="sday" value=""/>    <br><br>
	s_from <input type="text" name="s_from" value=""/><br><br>
    s_to <input type="text" name="s_to" value=""/>    <br><br>
    name <input type="text" name="name" value=""/>    <br><br>
    age <input type ="text" name="age"  value=""/>    <br><br>
    <input type="submit" name ="submit"/>
</form>
  
<a href="display.php">view</a>
</body>


</html>
<?php

include 'config.php';

if (isset($_POST['submit'])) {
	# code...

    $sdate = $_POST['sdate'];
	$sday  = $_POST['sday'];
	$s_from= $_POST['s_from'];
	$s_to  = $_POST['s_to'];
	$name  = $_POST['name'];
	$age  = $_POST['age'];

$sql="insert into user  (sdate,sday,s_from,s_to,name,age) VALUES('$sdate','$sday ','$s_from','$s_to', '$name','$age')";
$query=mysqli_query($con,$sql);
}
?>

