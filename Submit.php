<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sonybuy";

$conn = mysqli_connect($serverName,$userName,$password,$db_name) or die ("Connection Faild");

$customerName = $_POST["CustomerName"];
$phoneNumber = $_POST["PhoneNumber"];
$email = $_POST["Email"];
$ticketDate = $_POST["TicketDate"];
$productCategory = $_POST["ProductCategory"];
$purchasedDate = $_POST["PurchasedDate"];
$productSerialNumber = $_POST["ProductSerialNumber"];
$problemDescription = $_POST["ProblemDescription"];


$sql = "Insert into submit (CustomerName,PhoneNumber,Email,TicketDate,ProductCategory,PurchasedDate,ProductSerialNumber,ProblemDescription)
                    values ('$customerName' , $phoneNumber, '$email','$ticketDate','$productCategory','$purchasedDate','$productSerialNumber','$problemDescription')";
if (mysqli_query($conn,$sql)){
    header("Location:Home.html");
}
else
header("Location:ClientSubmit.html");
?>