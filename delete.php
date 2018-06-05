<?php

if(isset($_POST['submit']))
{

$txtname=$_POST['txtname'];
$txtid=$_POST['txtid'];
$txtyear=$_POST['txtyear'];
$txtcgpa=$_POST['txtcgpa'];
$txtlevelofstudy=$_POST['txtlevelofstudy'];
$txtdepartment=$_POST['txtdepartment'];


$connect=mysqli_connect("dbserv.cs.siu.edu", "skanmanthareddy", "uJ21pboy", "skanmanthareddy");


$query="DELETE FROM students WHERE txtid='$txtid' ";

$result=mysqli_query($connect,$query);

if($result)
{
echo 'Data Inserted';
}

else

{
echo 'Check again for inserting';
}


mysqli_close($connect);


}

?>