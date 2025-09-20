<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM user_registration WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "Email already registered. <a href='index.html'>Try again</a>";
    } else {
        $sql = "INSERT INTO user_registration (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful! <a href='login.html'>Login now</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
