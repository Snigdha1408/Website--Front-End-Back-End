<?php

if(isset($_POST['submit']))
{

$name=$_POST['txtname'];
$id=$_POST['txtid'];
$year=$_POST['txtyear'];
$cgpa=$_POST['txtcgpa'];
$levelofstudy=$_POST['txtlevelofstudy'];
$department=$_POST['txtdepartment'];



$connect=mysqli_connect("dbserv.cs.siu.edu", "skanmanthareddy", "uJ21pboy", "skanmanthareddy");


$query="INSERT INTO students (txtname,txtid,txtyear,txtcgpa,txtlevelofstudy,txtdepartment) VALUES ('$name', '$id', '$year', '$cgpa', '$levelofstudy', '$department')";

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