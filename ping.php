<!DOCTYPE html>
<html>
<head><title>Ping IP</title><link rel="stylesheet" href="assets/css/main.css"></head>
<body>
    <div class="container">
        <h2>Ping IP</h2>
        <form method="GET" action="ping.php">
            IP Address: <input type="text" name="ip" /><br/>
            <input type="submit" value="Ping" />
        </form>

        <?php
        if (isset($_GET['ip'])) {
            $ip = $_GET['ip'];
            echo "<pre>";
            system("ping -c 4 $ip");
            echo "</pre>";
        }
        ?>
    </div>
</body>
</html>