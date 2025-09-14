<!DOCTYPE html>
<html>
<head><title>Comment</title><link rel="stylesheet" href="assets/css/main.css"></head>
<body>
    <div class="container">
        <h2>Leave a Comment</h2>
        <form method="GET" action="comment.php">
            Comment: <input type="text" name="comment" /><br/>
            <input type="submit" value="Post Comment" />
        </form>

        <?php
        if (isset($_GET['comment'])) {
            $comment = $_GET['comment'];
            echo "<h3>User Comment:</h3>";
            echo $comment;
        }
        ?>
    </div>
</body>
</html>