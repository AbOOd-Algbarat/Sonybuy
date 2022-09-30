<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sonybuy";

$conn = mysqli_connect($serverName,$userName,$password,$db_name) or die ("Connection Faild");

// $sql = "Insert into log_in (UserName , Password) values ('abdullah' , 'abu3@')";

// if (mysqli_query($conn,$sql)){
//     echo "New record created successfully";
// }
// else
// echo "ERROR". $sql ."<br>". mysqli_error($conn);

$user = $_POST['Musername'];
$pass = $_POST['Mpassword'];

$sql = "select * from log_in";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($result)){
    if($row ["UserName"] == $user && $row ["Password"] == $pass) {
        header('Location: http://localhost/Sonybuy/Mlog.php');
    }
    else
    echo "ERROR";
}

?>