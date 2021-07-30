<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .main a{
        margin: 1rem 1rem;
    }
</style>
<body>
<div class="main">
    <a href="job-list/create.php">NEW USER ADD HERE</a>
</div>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>email</th>
            <th>contact</th>
            <th>gender</th>
            <th>post</th>
        </tr>
<?php
    error_reporting (E_ALL ^ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$database = "appform";

$conn = mysqli_connect($servername, $username, $password, $database,3325);

// if(isset($_POST[""]))
// {
if(!$conn){
	die("CAN NOT CONNECT ERROR : " . mysqli_connect_error()) ;
}

$sql = "SELECT * FROM appdetails";
$result = mysqli_query($conn, $sql);
if($result-> num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>" .$row["Name"] ."</td><td>" . $row["Email"] . "</td><td>". $row["Contact"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["apppost"] . "</td><td>" .'<a href="update.php">edit</a>  <a href="delete.php">Remove</a>  '."</td></tr>";

    }
    echo "</table>";
}
// }
?>

    </table>
</body>

</html>
