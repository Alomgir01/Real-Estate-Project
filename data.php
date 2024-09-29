<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $contact = htmlspecialchars(trim($_POST['contact']));
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $con = mysqli_connect("localhost", "root", "", "347");
    if (!$con) {
        die('Connection Failed: ' . mysqli_connect_error());
    } else {
        $stmt = $con->prepare("INSERT INTO registration (username, name, email, contact, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $name, $email, $contact, $hashedPassword);
        if ($stmt->execute()) {
            echo "Registration Success";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        mysqli_close($con);
    }
}
?>
