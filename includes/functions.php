<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "simple_cms_db";

$conn_db = mysqli_connect($servername, $username, $password, $dbname);

    // logout logic
    if(isset($_GET['logout'])){
        logout();
        header('Location: ' . ADMIN . 'login.php');
    }
    function logout(){
        
    }

    // add page logic
    function createPage() {
        global $conn_db;
        $title = $_POST['pageTitle'];
        $content = $_POST['pageContent'];
        $sql = "INSERT INTO pages (`pageTitle`, `pageContent`) 
                VALUES ('$title', '$content');";
        mysqli_query($conn_db, $sql);
    }
    if(isset($_POST['create_p'])) {
        createPage();
        header('Location: http://localhost/simple_cms/admin/');
    }
    
?>