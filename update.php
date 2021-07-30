<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "appform";

$conn = mysqli_connect($servername, $username, $password, $database,3325);

if(!$conn){
	die("CAN NOT CONNECT ERROR : " . mysqli_connect_error()) ;
}



if(isset($_POST["submit"]))
{
    $id = $_POST["id"];
	$fullname  = $_POST["name"];
	$email     = $_POST["email"];
	$contact   = $_POST["contact"];
	$gender  = $_POST["gen"];
	$apppost = $_POST["afp"];

    // $sql = "insert into appdetails(Name,Email,Contact,Gender,Post) values('$fullname','$email','$contact','$gender','$apppost')";
      
    $sql ="UPDATE `appdetails` SET `Name` = '$fullname', `Email` = '$email',`Contact`='$contact', `Gender` = '$gender', `Post` = '$apppost' WHERE `appdetails`.`id` = '$id'"; 


        $result = mysqli_query($conn, $sql);
        // Data Store
		// $exe = $obj->query("insert into register(fullname,email,contact,address,password) values('$fullname','$email','$contact','$address','$password')");

		if($result)
		{
           echo '<script>alert("Success")</script>';
		}
		else
		{	
			echo "Error Hai...";
		}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB APPLICATION</title>
</head>

<style>
    .main {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .form {
        display: flex;
        flex-direction: column;
        width: 50%;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }
    
    input {
        width: 100%;
        margin: 5px;
        padding: 5px;
    }
</style>

<body>

    <div class="nav">
        <a href="#">EDIT YOUR PROFILE</a>
    </div>

    <div class="main">

        <div class="form">

            <h1>APPLICATION FORM</h1>

            <form action="#" method="post" class="form">

            <label for="id1">id:</label>
            <input type="text" name="id">

                <label for="fname">Name:</label>
                <input type="text" name="name" id="name1">

                <label for="emailid">Emailid:</label>
                <input type="email" name="email" id="email1">

                <label for="fcontact">Contact number:</label>
                <input type="text" name="contact" id="con1">

                <label for="fgender">Gender:</label>
                <input type="radio" name="gen" id="">Male
                <input type="radio" name="gen" id="">Female

                <label for="">Application for post:</label>
                <input type="text" name="afp" id="afp1">

                <input type="submit" value="Save" name="submit">

            </form>

        </div>

    </div>


</body>

</html>