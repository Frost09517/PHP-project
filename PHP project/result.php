<html>
<body>
<style>
    .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f5f5f5;
    }

    .header .logo {
    font-size: 25px;
    font-family: 'Sriracha', cursive;
    color: #000;
    text-decoration: none;
    margin-left: 30px;
    }

    .nav-items {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #f5f5f5;
    margin-right: 20px;
    }

    .nav-items a {
    text-decoration: none;
    color: #000;
    padding: 35px 20px;
</style>
</body>
<header class="header">
    <a class="logo">Driving Licence Result</a>
    <nav class="nav-items">
        <a href="home.php">Home</a>
    </nav>
</header>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "licence_data";
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection){
    echo "Failure";
}else{
    $query= "SELECT * From `info`";
    echo "<table border='1'>

<tr>

<th>Id</th>

<th>Name</th>

<th>Email</th>

<th>Result</th>

</tr>";


    while($row = mysql_fetch_array($query))

    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysql_close($connection);
}

?>

</body>
</html>

