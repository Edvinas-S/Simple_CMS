<?php require_once('../includes/config.php');?>

<?php login_required() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS (Admin)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/style.css">
</head>
<body>
    <nav class="nav">
        <img src="<?php echo ROOT; ?>img/logo.png" alt="logo">
        <a href="<?php echo ADMIN; ?>">Admin</a>
        <a href="<?php echo ROOT; ?>" target="_blank" rel="noopener noreferrer">View &nbsp; Website</a>
        <a href="<?php echo ADMIN; ?>?logout">Logout</a>
    </nav> <!-- END NAVIGATION PANEL -->
    <main class="main">
        <h1>Manage pages</h1>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            <?php
                $result = mysqli_query($conn_db, 'SELECT pageID, pageTitle FROM pages;');
                if (mysqli_num_rows($result) >= 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['pageTitle']."</td>
                                <td>
                                    <form action='../includes/functions.php' method='post'><input type='submit' name='delete_p' value='Delete'><input type='hidden' name='page_id' value='".$row['pageID']."'></form>
                                    <form action='editPage.php' method='post'><input type='submit' name='edit_p' value='Edit'><input type='hidden' name='page_id' value='".$row['pageID']."'></form>
                                </td>
                            </tr>";
                    }
                }
            ?>
        </table>
        <form action="addPage.php" method="POST">
                <button type="submit">Add new page</button>
        </form>
    </main> <!-- END MAIN CONTENT -->
    
    <?php
        require('../includes/footer.php');
        mysqli_close($conn_db);
    ?>
</body>
</html>