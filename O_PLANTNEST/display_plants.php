<?php
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "o_plantnest";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(mysqli_connect_error())
    {
        die("connection Error".mysqli_connect_errno());
    }
    if($conn)
    {
        // echo "working!";
        $sql = "SELECT * FROM add_plant ORDER BY plant_title" ;
        $result = $conn->query($sql);        

    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http_equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="display_plants.css">

    <title>Plants display</title>
</head>
<body>
<div class="fullcontainer banner" id="homesection">
<header>
            <div class="container">
                
                <nav>
                    <a href="Home_page.php"><img src="Design/logo.png" alt="logo"></a>
                    <ul>
                        
                        <li>
                            <a href="Home_page.php#homesection">Home</a>
                        </li>
                        <li>
                            <a href="Home_page.php#Plants">Plants</a>
                        </li>
                        <li>
                            <a href="Home_page.php#contact">Contact</a>
                        </li>
                        <li>
                            <a href="log_in.php">Login</a>
                        </li>
                                               
                    </ul>

                </nav>
            </div>

            </header>
 
<main id="#plants">
     
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <div class="card">
        <a href="form_ordering_plant.php?plant_id=<?php echo $row["plant_id"]; ?>&plant_title=<?php echo $row["plant_title"]; ?>&plant_price=<?php echo $row["plant_price"]; ?>
        ">

        <div class="image">
            <img src="<?php echo $row["plant_image"]; ?>">
        </div>

        <div class="caption">
            <p class="plant_title"><?php echo $row["plant_title"]; ?></p>
            <p class="price">price: <?php echo $row["plant_price"]; ?></p>
            <p class="available">available: <?php echo $row["plant_quantity"]; ?></p>
        </div>
        </a>
    </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</main>
    
</body>
</html>