<?php
    $servername = "localhost";
    $username = "root";
    $passw = "";
    $database = "education_site";

    $conn = mysqli_connect($servername, $username, $passw, $database);
    if (!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    echo"connected to database successfully <br>";

    // registration and saving data code 
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $course = $_POST["course"];

    if(isset($_POST ['register'])){
        $query = "INSERT INTO student_registration (first_name, last_name, username, email, pwd, country, course) VALUES ('$first_name','$last_name','$username', '$email', '$password', '$country', '$course')";

        if (mysqli_query($conn,$query)){
            echo "Records saved successfully";
        }
        else{
            echo"Failed to save records";
        }
    }

    // login and saving code 


mysqli_close($conn);

?>