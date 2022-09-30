<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sonybuy";

$conn = mysqli_connect($serverName, $userName, $password, $db_name) or die("Connection Faild");

$sql = "select * from submit ";

$result = $conn->query($sql);



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
    font-family: bahn;
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

  table,
  th,
  td {
    border: 2px solid #e6710c;
    border-collapse: collapse;
    font-family: bahn;
  }

  th,
  td {
    padding: 5px;
    text-align: center;
  }

  th {
    font-size: 20px;
  }

  td {
    font-size: 18px;
    padding: 10px;
  }

  .Tab {
    margin-top: 60px;
    margin-left: 60px;
    height: 450px;
    overflow: hidden;
  }

  .table {
    position: sticky;
    top: 0;
    width: 100%;
  }
  #L1 {
    color: #1f315a;
    font-family: bahn;
    font-size: 30px;
    background-color: #e6720c6a;
    border-radius: 40px;
    text-align: center;
    margin-left: 260px;
    padding: 8px;
    border: solid 2px #e6720c6a;
  }

  #L2 {
    color: #1f315a;
    font-family: bahn;
    font-size: 30px;
    background-color: #e6720c6a;
    border-radius: 40px;
    text-align: center;
    margin-left: 280px;
    padding: 8px;
    border: solid 2px #e6720c6a;
  }

  footer {
    margin-top: 60px;
  }

  select{
    margin-top: 37px;
  }

  .log {
    display: grid;
    text-decoration: none;
    text-align: center;
    font-size: 30px;
    float: right;
    margin-right: 220px;
    color: #1f315a;
    font-family: bahn;
    background-color: #e6720c6a;
    border: solid 2px #e6720c6a;
    width: 180px;
    height: 60px;
    border-radius: 40px;
    margin-top: 10px;
  }

  .log:hover {
    color: white;
    background-color: #1f315a;
    border: solid 2px #1f315a;
  }

  option {
    background-color: #e6720c6a;
    color: #1f315a;
    border: 5px solid ;
    border-radius: 40px;
    width: 300px;
    height: 30px;
    font-size: 18px;
    font-family: bahn;
  }
</style>

<body background="img/BG2.png">
  <div class="nav">
    <a href="Home.html">
      <b>Home</b>
    </a>
    <a href="tickets.html"><b>Tickets</b></a>
    <a href="LogIn.html" class="Tickets"><b>LogIn</b></a>
  </div>
  <div class="Tab" style="overflow-y: auto ;">
    <table>
      <tr>
        <th>CustomerName</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>TicketDate</th>
        <th>ProductCategory</th>
        <th>PurchasedDate</th>
        <th>ProductSerialNumber</th>
        <th>ProblemDescription</th>
        <th>ClientID</th>
        <th>EmployeeID</th>
      </tr>
      <?php

      while ($row = $result->fetch_assoc()) {


        echo "
        <tr>
          <td>" . $row["CustomerName"] . "</td>
          <td>" . $row["PhoneNumber"] . "</td>
          <td>" . $row["Email"] . "</td>
          <td>" . $row["TicketDate"] . "</td>
          <td>" . $row["ProductCategory"] . "</td>
          <td>" . $row["PurchasedDate"] . "</td>
          <td>" . $row["ProductSerialNumber"] . "</td>
          <td>" . $row["ProblemDescription"] . "</td>
          <td>" . $row["ClientID"] . "</td>
          <td>" . $row["EmployeeID"] . "</td>
        </tr>";
      }
      ?>
    </table>
  </div>
  <footer>
    <form action="" method="">
      <div class="all">
        <label for="T" id="L1">TicketID :</label>
        <select id="T">
          <option>T-1</option>
          <option>T-2</option>
          <option>T-3</option>
          <option>T-4</option>
        </select>
        <label for="E" id="L2">EmployeeID :</label>
        <select id="E">
          <option>E-1</option>
          <option>E-2</option>
          <option>E-3</option>
          <option>E-4</option>
        </select>
        <input type="submit" value="Submit" class="log">
      </div>
    </form>
  </footer>
</body>

</html>