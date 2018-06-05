<?php

$link=mysqli_connect("dbserv.cs.siu.edu","skanmanthareddy","uJ21pboy","skanmanthareddy");
$txtid=$_GET["txtid"];


$sql=" select * from students where  txtid='$txtid'";
$out="";
$result=mysqli_query($link, $sql);
  if (mysqli_num_rows($result)==1)
  {
    while ($myrow=mysqli_fetch_array($result))
    {
        $txtname=$myrow["txtname"];
         $txtyear=$myrow["txtyear"];
          $txtdepartment=$myrow["txtdepartment"];
           $txtcgpa=$myrow["txtcgpa"];
            $txtlevelofstudy=$myrow["txtlevelofstudy"];
            $out.=$txtname . "," . $txtyear . "," . $txtdepartment . "," . $txtcgpa . "," . $txtlevelofstudy;
    }
  }
    
  else
    $out=" , , , ,";

echo $out;
mysqli_close($link);
?>


