<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "simple_cms_db";

$conn_db = mysqli_connect($servername, $username, $password, $dbname);

    // logout logic
    function logout(){
        
    }
    if(isset($_GET['logout'])){
        logout();
        header('Location: http://localhost/simple_cms/admin/login.php');
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
    
    // delete page logic
    function deletePage() {
        global $conn_db;
        $pageID = $_POST['page_id'];
        $sql = "DELETE FROM pages WHERE `pageID`=$pageID;";
        mysqli_query($conn_db, $sql);
    }
    if(isset($_POST['delete_p'])) {
        deletePage();
        header('Location: http://localhost/simple_cms/admin/');
    }

    // edit page logic
    function editPage() {
        global $conn_db;
        $pageID = $_POST['page_id'];
        $title = $_POST['pageTitle'];
        $content = $_POST['pageContent'];
        $sql = "UPDATE pages SET `pageTitle`='$title', `pageContent`='$content' 
                WHERE `pageID`=$pageID;";
        mysqli_query($conn_db, $sql);
    }
    if(isset($_POST['edited_p'])) {
        editPage();
        header('Location: http://localhost/simple_cms/admin/');
    }
?>