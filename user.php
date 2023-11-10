<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // prepare the SQL statement with placeholders
    $sql = "SELECT * FROM writer WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // bind the variables to the statement
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // execute the statement
    mysqli_stmt_execute($stmt);

    // check for errors
    if (mysqli_stmt_errno($stmt) !== 0) {
        echo "An error occurred.";
        exit;
    }

    // check if there is a row with the given email and password
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) == 1) {
        // set session variable with user's name
        
        mysqli_stmt_fetch($stmt);
        session_start();
        $_SESSION["name"] = $name;

        // redirect to dashboard
        header("Location: option2.php");
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
