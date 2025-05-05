<?php
$connect = mysqli_connect("localhost","bayu","bayu1618","json");
$sql = "Select * from wisata";
$result = mysqli_query($connect,$sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result))
{
    $json_array[]=$row;
}
echo json_encode($json_array);
?>