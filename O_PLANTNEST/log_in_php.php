<?php 
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "o_plantnest";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else if($conn)
    {
        // echo "Connected: ";
        $user_mail = $_POST['user_mail'];
        $user_password = $_POST['user_password'];
        $permission = "permitted";
        $No_permission = "not_permitted";

        $num_of_result1 = 0;
        $num_of_result2 = 0;

        $find_copy1 = "SELECT u_email FROM sign_up WHERE u_email = ? and u_password = ? and permission=? ";
        $pre_statemnt = $conn->prepare($find_copy1);
        $pre_statemnt->bind_param("sss", $user_mail, $user_password, $permission);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($user_mail);
        $pre_statemnt->store_result();
        $num_of_result1 = $pre_statemnt->num_rows();
        $pre_statemnt->close();

        $find_copy2 = "SELECT u_email FROM sign_up WHERE u_email = ? and u_password = ? and permission=? ";
        $pre_statemnt = $conn->prepare($find_copy2);
        $pre_statemnt->bind_param("sss", $user_mail, $user_password, $No_permission);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($user_mail);
        $pre_statemnt->store_result();
        $num_of_result2 = $pre_statemnt->num_rows();
        $pre_statemnt->close();

        $sql = "SELECT u_email FROM sign_up WHERE u_email='$user_mail' and u_password='$user_password' and permission='$No_permission'" ;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $update =$row["u_email"];
        echo "working";
        if($num_of_result1 != 0 ){
            header('Location: authority.php');
        }
        else if($num_of_result2 != 0 ){
            header("Location: user.php?updateid='$update'");
        }
        else{
            echo "Invalid user name or password";
            // echo "working";
        }

    }
    
?>