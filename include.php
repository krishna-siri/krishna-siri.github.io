<!DOCTYPE html>
<html>
<head><title>File Include</title><link rel="stylesheet" href="assets/css/main.css"></head>
<body>
    <div class="container">
        <h2>File Include Demo</h2>
        <?php
        if (isset($_GET['page'])) {
            include($_GET['page']);
        } else {
            echo "No page specified.";
        }
        ?>
    </div>
</body>
</html>