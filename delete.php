<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <?php
        error_reporting(E_ALL ^ E_NOTICE);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "appform";
        
        $conn = mysqli_connect($servername, $username, $password, $database, 3325);
        
        if(isset($_POST[""]))
        {
        $id=$_POST["id"];
        if (!$conn) {
            die("CAN NOT CONNECT ERROR : " . mysqli_connect_error());
        }

        $sql = "DELETE FROM `appdetails` WHERE `appdetails`.`id` ='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script>alert("DELETED")</script>';
        }
    }        
        ?>

<label for="id1">id:</label>
            <input type="text" name="id">
            <input type="submit">
</body>

</html>