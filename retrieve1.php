

<?php

$servername="dbserv.cs.siu.edu";

$username="skanmanthareddy";

$password="uJ21pboy";

$dbname="skanmanthareddy";

$con= mysqli_connect($servername,$username,$password,$dbname);

if(!$con)

{

die("unable to connect to database");

}
?>
<html>
<head>
<style>
body {
    background-image: url("image.jpg");
    <!-->background-size: 80px 60px;<-->
   
}
</style>
</head>
<body >
<center>
	<table  border="1">
	<tr> 
	  <th> Name</th>
	   <th> ID</th>
	    <th> Year</th>
	     <th> CGPA</th>
	      <th> Level Of Study</th>
	       <th> Department </th>
	       <th> Action </th>
	       </tr>
	      
<?php

$sql= "select * from students";

$result=mysqli_query($con,$sql);
  
while($row=mysqli_fetch_array($result))
{
	echo "<tr><form action=update6.php method=POST>";
	echo "<td><input type=text name=name value='".$row['txtname']."'></td>";
	echo "<td><input type=text name=id value='".$row['txtid']."'></td>";
	echo "<td><input type=text name=year value='".$row['txtyear']."'></td>";
	echo "<td><input type=text name=cgpa value='".$row['txtcgpa']."'></td>";
	echo "<td><input type=text name=study value='".$row['txtlevelofstudy']."'></td>";
	echo "<td><input type=text name=department value='".$row['txtdepartment']."'></td>";
	echo "<td><input type=submit value=UPDATE name=submit></td>";
	echo "<td><input type=submit value=DELETE name=submit1></td>";
	echo "</form></tr>";
}



mysqli_close($con);

?>
</table>
</body>
</html>



