
<table border='1' width='100%'> 
<tr> 
<td>sdate</td>
<td>sday</td>
<td>s_from</td>
<td>s_to</td>
<td>name</td>
<td>age</td>
</tr>


<?php
include ("config.php");
$query="select * from user";
$data =mysqli_query($con,$query);
$result =mysqli_fetch_assoc($data);
while($result= mysqli_fetch_assoc($data)){

echo "<tr> 
<td> ".$result['sdate']."</td>

<td> ".$result['sday']."</td>

<td> ".$result['s_from']."</td>

<td> ".$result['s_to']."</td>

<td> ".$result['name']."</td>
<td> ".$result['age']."</td>




</tr>";
}

?>
</table>