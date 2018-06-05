

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

$result=mysqli_query($con, $sql);
  
 while($row = mysqli_fetch_assoc($result)) {

//echo "Name:" . $row['txtname'] . " , ID :"  . $row['txtid'] . " , Year:" . $row['txtyear'] . ",  cgpa :" . $row['txtcgpa'] . " , Level of Study: " . $row['txtlevelofstudy'] . ", Department: " . $row['txtdepartment']  . " </br>";

echo "<tr> 
      
      <td> " . $row['txtname'] . "</td>
      <td> " . $row['txtid'] . "</td>
      <td> " . $row['txtyear'] . "</td>
      <td> " . $row['txtcgpa'] . "</td>
      <td> " . $row['txtlevelofstudy'] . "</td>
	  <td> " . $row['txtdepartment'] . "</td>
	  <td>    
	   <a href= 'update6.php' > Update </a> | 
	   <a href= 'delete.php' > Delete </a>  </td>

	  </tr> ";
	}



mysqli_close($con);

?>
</table>
</body>
</html>



