<?php require('../includes/config.php'); ?>

<?php // generate content on pressed ID
    $pageID = $_POST['page_id'];
    $result = mysqli_query($conn_db, "SELECT * FROM pages WHERE `pageID`=$pageID;");
    $row = mysqli_fetch_assoc($result);
    $id = $row['pageID'];
    $pageTitle = $row['pageTitle'];
    $pageContent = $row['pageContent'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS (Edit Page)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/style.css">
</head>
<body>
    <nav class="nav">
        <img src="<?php echo ROOT; ?>img/logo.png" alt="logo">
    </nav>
    <main class="main">
        <h2>Edit page</h2>
        <form action="<?php echo ROOT; ?>includes/functions.php" method="post">
            <label>Page title</label><br><input type="text" name="pageTitle" value="<?php echo $pageTitle ?>" required maxlength="15"><br>
            <input type="hidden" name="page_id" value="<?php echo $id?>">
            <label>Content</label><br><textarea name="pageContent"><?php echo $pageContent ?></textarea><br>
            <button type="submit" name="edited_p">Edit</button>
        </form>
    </main>
    <?php
        require('../includes/footer.php');
        mysqli_close($conn_db);
    ?>
</body>
</html>