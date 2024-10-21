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
        echo "Connected: ";
        $plant_title  = $_POST['plant_title'];
        // $plant_writer = $_POST['plant_writer'];
        $plant_price = $_POST['plant_price'];
        $plant_quantity = $_POST['plant_quantity'];
        $plant_description = $_POST['plant_description'];
        $plant_image = $_FILES['plant_image']['name'];
        // echo "working";

        $find_copy = "SELECT plant_title FROM add_plant WHERE plant_title = ?";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $pre_statemnt->bind_param("s", $plant_title);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($plant_title);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";
        if($num_of_result == 0 ){
            $pre_statemnt->close();
            // move inserted file in a folder
            $directory = "plants_image/";
            $image = $directory.$_FILES["plant_image"]["name"];
            $directory.($_FILES["plant_image"]["name"]);
            $directoryN = $directory.basename($_FILES["plant_image"]["name"]);
            move_uploaded_file($_FILES['plant_image']['tmp_name'], "$directoryN");

            $insert = "INSERT INTO add_plant (plant_title, plant_price, plant_quantity, plant_description, plant_image) 
             VALUES(?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            // echo "working";
            $pre_statemnt->bind_param("siiss", $plant_title, $plant_price, $plant_quantity, $plant_description, $image);
           $pre_statemnt->execute();

            
           header('Location: authority.php');
        }
        else{

            $pre_statemnt->close();
            $sql = "SELECT plant_quantity FROM add_plant where plant_title ='$plant_title'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $value = $row["plant_quantity"];
        
            // echo "working";
            $value1= (int)$plant_quantity + $value;
            echo gettype($value1);

            // echo "working";

            $update = "UPDATE add_plant SET plant_quantity = '$value1'  where plant_title ='$plant_title'";
            // echo "working";
            $pre_statemnt = $conn->prepare($update);
           $pre_statemnt->execute();
           header('Location: authority.php');
        }
    

    }
    
?>

