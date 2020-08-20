<?php require('../includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS (Add Page)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/style.css">
</head>
<body>
    <nav class="nav">
        <img src="<?php echo ROOT; ?>img/logo.png" alt="logo">
    </nav>
    <main class="main">
        <h2>Add page</h2>
        <form action="<?php echo ROOT; ?>includes/functions.php" method="post">
            <label>Page title</label><br><input type="text" name="pageTitle" required maxlength="15"><br>
            <label>Content</label><br><textarea name="pageContent"></textarea><br>
            <button type="submit" name="create_p">Create</button>
        </form>
    </main>
    <?php
        require('../includes/footer.php');
        mysqli_close($conn_db);
    ?>
</body>
</html>