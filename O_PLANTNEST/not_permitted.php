<?php 
    if(isset($_GET['updateid']))
    {
        $id = $_GET['updateid'];
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "o_plantnest";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else if($conn)
    {
        $permission = "not_permitted";
        $update = "UPDATE sign_up  
        SET permission = '$permission' where u_email= '$id'";
        $pre_statemnt = $conn->prepare($update);
        $pre_statemnt->execute();
        header('Location: authority.php#sign_up');
        
    }
       

    }
    
?>