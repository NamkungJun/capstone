<?php
$con=mysqli_connect("localhost","root","4864361");

mysqli_set_charset($con,"utf8");
mysqli_select_db($con,'cap');

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$ID = $_POST['ID'];
$Password = $_POST['Password'];
$Name = $_POST['Name'];
$Department = $_POST['Department'];
$Rank = $_POST['Rank'];
$AC = $_POST['AC'];


$result = mysqli_query($con,"insert into info (ID,Password,Name,Department,Rank,AC) values ('$ID','$Password','$Name','$Department','$Rank',$AC)");

  if($result){
    echo '승인';
  }
  else{
    echo '실패';
  }
mysqli_close($con);
?>
