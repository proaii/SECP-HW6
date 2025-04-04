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
  <!-- Design by foolishdeveloper.com -->
    <title>Attack Simulation</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="POST">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" required id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password"name="password" required id="password">

        <button>Log In</button>
    </form>
</body>
</html>