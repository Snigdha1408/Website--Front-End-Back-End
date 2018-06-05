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
<h1 ><marquee behavior="scroll"   direction="left" ><b ><i> Student Search</i></b></marquee></h1>



<center>
	<table  border="1">
	<tr> 
	  <th> Name</th>
	   <th> ID</th>
	    <th> Year</th>
	     <th> CGPA</th>
	      <th> Level Of Study</th>
	       <th> Department </th>
	       </tr>

<?php
if(isset($_POST['submit']))
{
$connect=mysqli_connect("dbserv.cs.siu.edu","skanmanthareddy", "uJ21pboy","skanmanthareddy");
$sql="SELECT * from studentreg WHERE  txtid='". $_POST['txtid'] ."'";
$result=mysqli_query($connect,$sql);
	while($row=mysqli_fetch_array($result))
{
	echo "<tr><form method=POST>";
	echo "<td><input type=text name=name value='".$row['txtname']."'></td>";
	echo "<td><input type=text name=id value='".$row['txtid']."'></td>";
	echo "<td><input type=text name=year value='".$row['txtyear']."'></td>";
	echo "<td><input type=text name=cgpa value='".$row['txtcgpa']."'></td>";
	echo "<td><input type=text name=study value='".$row['txtlevelofstudy']."'></td>";
	echo "<td><input type=text name=department value='".$row['txtdepartment']."'></td>";
}

}
mysqli_close($connect);
?>