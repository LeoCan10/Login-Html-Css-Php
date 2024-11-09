<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

    if ($username === 'username' && password_verify($password, $hashed_password)) {
        header('Location: done.html');
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="div-master">
        <div class="container">
            <h1>Login</h1>
            <br><br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <br><br>
                <button type="submit">Sign In</button>
                <a class="link" href="signup.html">Create an account</a>
                <br><br>
                <h6>Made by LeoCan</h6>
            </form>
        </div>
    </div>
</body>
</html>