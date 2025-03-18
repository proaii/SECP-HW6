<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple hardcoded login credentials (use a secure method in real-world scenarios)
    $valid_username = 'admin';
    $valid_password = 'admin';

    if ($username === $valid_username && $password === $valid_password) {
        session_start();
        $_SESSION['logged_in'] = true;
        // Redirect to the dashboard page upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
