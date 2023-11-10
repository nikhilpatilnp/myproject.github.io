<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $special_key = $_POST["special_key"];

    // validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // check if the special key is correct
    if ($special_key != "Nikhil@123") {
        echo "Invalid special key.";
        exit;
    }

    // prepare the SQL statement with placeholders
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // check if prepare statement failed
    if (!$stmt) {
        echo "Prepare statement failed.";
        exit;
    }

    // bind the variables to the statement
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // execute the statement
    mysqli_stmt_execute($stmt);

    // bind the result variables
  

    // fetch the results
    mysqli_stmt_fetch($stmt);

    // check if there is a row with the given email and password
    if ($email === $email && $password === $password) {
        // start a new session
        session_start();

        // store the user's email in the session
        $_SESSION["email"] = $email;

        // redirect the user to the dashboard
        header("Location: option.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }

    // close the statement
    mysqli_stmt_close($stmt);
}

// close the connection
mysqli_close($conn);
?>
