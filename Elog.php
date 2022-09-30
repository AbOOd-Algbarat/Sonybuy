<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sonybuy";

$conn = mysqli_connect($serverName,$userName,$password,$db_name) or die ("Connection Faild");

$sql = "select * from submit ";

$result = $conn ->query($sql);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sonybuy</title>
    <link rel="shortcut icon" href="img/logo-tab.png" type="image/x-icon" />
    
  </head>
  <style>
    @font-face {
    src: url(font/BAHNSCHRIFT\ 9.TTF);
    font-family: bahn ;
    }
    body {
    background-size: cover;
    font-family: bahn;
    }
    
    .nav {
    display: grid;
    grid-template-columns: 150px 150px 150px;
    font-size: 20px;
    margin-top: 100px;
    margin-left: 390px;
    font-family: bahn;
    text-decoration: none;
    }
    
    .nav a {
    text-decoration: none;
    }
    
    .Tickets {
    color: #f49f0d;
    }
    
table, th, td {
  border: 2px solid #e6710c;
  border-collapse: collapse;
  font-family: bahn;
}
th, td {
  padding: 5px;
  text-align: center;
}
th{
  font-size: 20px;
}
td{
  font-size: 18px;
  padding: 10px;
}
.Tab{
  margin-top: 70px;
  margin-left:90px;
  height: 550px;
    overflow: hidden;
}

.table {
    position: sticky;
    top: 0;
    width: 100%;
}
  </style>
  <body background="img/BG2.png">
    <div class="nav">
      <a href="Home.html">
        <b>Home</b>
      </a>
      <a href="tickets.html"><b >Tickets</b></a>
      <a href="LogIn.html" class="Tickets"><b>LogIn</b></a>
      </div>
      <div class="Tab" style="overflow-y: auto ;">
      <table>
        <tr>
          <th >CustomerName</th>
          <th >PhoneNumber</th>
          <th >Email</th>
          <th >TicketDate</th>
          <th >ProductCategory</th>
          <th >PurchasedDate</th>
          <th >ProductSerialNumber</th>
          <th >ProblemDescription</th>
          <th >ClientID</th>
        </tr>
        <?php

while ($row = $result ->fetch_assoc()){


        echo "
        <tr>
          <td>". $row["CustomerName"]. "</td>
          <td>". $row["PhoneNumber"]. "</td>
          <td>". $row["Email"]. "</td>
          <td>". $row["TicketDate"]. "</td>
          <td>". $row["ProductCategory"]. "</td>
          <td>". $row["PurchasedDate"]. "</td>
          <td>". $row["ProductSerialNumber"]. "</td>
          <td>". $row["ProblemDescription"]. "</td>
          <td>". $row["ClientID"]. "</td>
        </tr>";
}
        ?>
      </table>
    </div>
            <!-- <form action="/action_page.php">
        <label for="cars">Choose a car:</label>
        <select name="cars" id="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
      </form> -->
  </body>
</html>
