<!DOCTYPE html>
<html>
<head><title>Login</title><link rel="stylesheet" href="assets/css/main.css"></head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <form method="GET" action="login.php">
            Username: <input type="text" name="username" /><br/>
            Password: <input type="text" name="password" /><br/>
            <input type="submit" value="Login" />
        </form>

        <?php
        if (isset($_GET['username']) && isset($_GET['password'])) {
            $username = $_GET['username'];
            $password = $_GET['password'];
            echo "<h3>Debug:</h3>";
            echo "Executing query: SELECT * FROM users WHERE username='$username' AND password='$password'<br/>";

            if ($username == 'admin' && $password == 'admin123') {
                echo "<p>Login successful!</p>";
            } else {
                echo "<p>Login failed.</p>";
            }
        }
        ?>
    </div>
</body>
</html>