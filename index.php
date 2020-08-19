<?php require('./includes/config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav class="nav">
        <img src="./img/logo.png" alt="logo">
        <?php 
            $sql = mysqli_query($conn, 'SELECT pageID, pageTitle FROM pages');
            while ($row = mysqli_fetch_object($sql)) {
                echo "<a href=\"".ROOT."?p=$row->pageID\">$row->pageTitle</a><br>";
            };
        ?>
    </nav> <!-- END NAVIGATION PANEL -->
    <main class="main">
        <?php
            //if no page clicked on load home page default to it of 1
            if(!isset($_GET['p'])){
                $q = mysqli_query($conn, "SELECT * FROM pages WHERE pageID='1'");
            } else { //load requested page based on the id
                $id = $_GET['p']; //get the requested id
                $q = mysqli_query($conn, "SELECT * FROM pages WHERE pageID='$id'");
            }
            
            //get page data from database and create an object
            $r = mysqli_fetch_object($q);
            
            //print the pages content
            echo "<h1>$r->pageTitle</h2>";
            echo $r->pageContent;
        ?>
    </main> <!-- END MAIN CONTENT -->

    <?php 
        require('./includes/footer.php');
        mysqli_close($conn) 
    ?>
</body>
</html>