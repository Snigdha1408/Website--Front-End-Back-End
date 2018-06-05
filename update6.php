<?php
if(isset($_POST['submit']))
{
$connect=mysqli_connect("dbserv.cs.siu.edu","skanmanthareddy", "uJ21pboy","skanmanthareddy");
$sql="UPDATE students SET txtname='$_POST[name]',txtid='$_POST[id]',txtyear='$_POST[year]',txtcgpa='$_POST[cgpa]',txtlevelofstudy='$_POST[study]',txtdepartment='$_POST[department]' WHERE txtid='$_POST[id]'";
if(mysqli_query($connect,$sql))
	header("refresh:1;url=retrieve1.php");
else
	echo "Not Updated";
}
else
{
	$connect=mysqli_connect("dbserv.cs.siu.edu", "skanmanthareddy", "uJ21pboy", "skanmanthareddy");

	$query="DELETE FROM students WHERE txtid='$_POST[id]' ";

if(mysqli_query($connect,$query))
	header("refresh:1;url=retrieve1.php");
else
	echo "Not Deleted";
}
?>