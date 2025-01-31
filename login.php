<?php
session_start();
// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: welcome.php');  // Redirect if already logged in
    exit;
}

// Check for login errors
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'your_database_name'); // replace with your database credentials

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize user input
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Query to check if the email exists in the database
    $sql = "SELECT id, password FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the password matches
        if (password_verify($password, $user['password'])) {
            // Set session variable
            $_SESSION['user_id'] = $user['id'];

            // Redirect to a welcome page or dashboard
            header('Location: welcome.php');
            exit;
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'No user found with that email';
    }

    $conn->close();
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
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
