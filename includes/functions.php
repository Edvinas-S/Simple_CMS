<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "simple_cms_db";

$conn_db = mysqli_connect($servername, $username, $password, $dbname);

    // login logic
    function login($conn_db, $username, $password) {
        $username = strip_tags(mysqli_real_escape_string($conn_db, $username));
        $password = strip_tags(mysqli_real_escape_string($conn_db, $password));

        $hashed_password = md5($password.$username);

        // check if the user name and password combination exist in database
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";
        $result = mysqli_query($conn_db, $sql);
        
        if (mysqli_num_rows($result) == 1) {
			// the username and password match,
			// set the session
            $_SESSION['loggedin'] = true;
						
			// direct to admin
			header('Location:'. ADMIN);
			exit();
		}
    }

    // Authentication
	function logged_in() {
		if($_SESSION['loggedin'] == true) {
			return true;
		} else {
			return false;
		}	
	}

	function login_required() {
		if(logged_in()) {	
			return true;
		} else {
			header('Location: '. ADMIN .'login.php');
			exit();
		}	
	}

    // logout logic
    function logout(){
        unset($_SESSION['loggedin']);
		header('Location: ' . ADMIN . 'login.php');
		exit();
    }
    if(isset($_GET['logout'])){
        logout();
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