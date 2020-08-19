<?php 
    require(ROOT .'includes/config.php');

    // logout logic
    if(isset($_GET['logout'])){
        logout();
        header('Location: ' . ADMIN . 'login.php');
    }
    function logout(){
        
    }

    // add page logic
    function createPage() {
        global $conn;
        $sql = "INSERT INTO pages (`pageTitle`, `pageContent`)
                VALUES ('".$_POST['pageTitle'].", '".$_POST['pageContent']."');";
                mysqli_query($conn, $sql);
    }
    if(isset($_POST['pageTitle'])) {
        createPage();
        header('Location'.ADMIN);
    }
?>