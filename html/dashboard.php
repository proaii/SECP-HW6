<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php"); // Redirect back to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background">
    </div>
    <div class="card-box">
        <h3>Dashboard</h3>
        <p style="text-align: center; color: #ffffff;">You have successfully logged in!</p>
        <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);" 
        src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExcHlieDNwNmhhcGY0c3JhdDc4ZWk2OWR4dGF6NmMyMzBlanMzajRkeCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Ju7l5y9osyymQ/giphy.gif" height="593">
        
        <button onclick="window.location.href='logout.php'" type="button">Logout</button>
    </div>
</body>
</html>
