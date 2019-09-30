<?php
$servername = "localhost";
$username = "root";
$password = "coeus123";
$dbname = "PHPLearning";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT count(*) as count from users where username = '".$username."'"."and password = '".$password."'";
    //$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
    $user = $conn->query($sql)->fetch();
    //echo $user["count"];
    // use exec() because no results are returned

    $conn->exec($sql);
    if ($user["count"] > 0) {
            header('location: http://localhost/dashboard/view/index.php');
            session_start();
            $_SESSION["user"] = $username;
            $_SESSION["password"] = $password;

    } else {
       echo "Invalid User Data Inserted!!";
    }
    if ($user["username"] = "" || $user["password"] = ""){
        echo "Please Enter Data";
    }

}

catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;