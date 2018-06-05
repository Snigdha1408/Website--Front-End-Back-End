function getDetails(txtid) 
{
  var xhr = new XMLHttpRequest();

// Register the embedded handler function
  xhr.onreadystatechange = function () 
  {
    if (xhr.readyState == 4 && xhr.status == 200) 
    {
      var result = xhr.responseText;
      var place = result.split(',');
        document.getElementById("txtname").value = place[0];
        document.getElementById("txtyear").value = place[1];
        document.getElementById("txtdepartment").value = place[2];
        document.getElementById("txtcgpa").value = place[3];
        document.getElementById("txtlevelofstudy").value = place[4];
    }
  };
  xhr.open("GET", "studentreges.php?txtid=" + txtid, true);
  xhr.send(null);
}
