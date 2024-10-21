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
        $name  = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $plant_id = $_POST['plant_id'];
        $plant_title = $_POST['plant_title'];
        $amount = $_POST['amount'];
        $account_type = $_POST['account_type'];
        $a_number = $_POST['a_number'];
        $t_id =$_POST['t_id'];
        // $transac = int($t_id);
        // echo "working";
        // echo gettype($t_id);

        
        $find_copy = "SELECT email FROM purchase  where t_id= ?";
        $pre_statemnt = $conn->prepare($find_copy);
        $pre_statemnt->bind_param("s",$t_id);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($email);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo $num_of_result;
        
        if($num_of_result == 0 ){
        $pre_statemnt->close();
        $insert = "INSERT INTO purchase (name, contact, email, address, plant_id, plant_title, amount,
            account_type, a_number, t_id) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $pre_statemnt = $conn->prepare($insert);
        $pre_statemnt->bind_param("sissisisis", $name, $contact, $email, $address, $plant_id, $plant_title, $amount,
            $account_type, $a_number, $t_id);
        $pre_statemnt->execute();

        $pre_statemnt->close();
        $sql = "SELECT plant_quantity FROM add_plant where plant_title ='$plant_title'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();        
        $value = $row["plant_quantity"];
        // echo "working";
        $value1= $value-1;
        // echo gettype($value1);
        $update = "UPDATE add_plant SET plant_quantity = '$value1'  where plant_title ='$plant_title'";
        
        $pre_statemnt = $conn->prepare($update);
        $pre_statemnt->execute();

        header('Location: display_plants.php');
        }
        else{
            echo "ERROR!! Your information has been stored...";
            // echo "working";
        }
    }
    
?>