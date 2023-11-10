<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    //check if username is already taken
    $sql = "SELECT * FROM writer WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if ($result !== false && mysqli_num_rows($result) > 0) {
        echo "Username already taken. Please choose a different one.";
    } else {
        //insert new user into database
        $sql = "INSERT INTO writer (username, password, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $sql)) {
            // redirect to login page
            header("Location: option2.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
