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
    <link rel = "stylesheet" href="Home_page.css">

    <title>Home</title>
</head>
<body>
<div class="fullcontainer banner" id="homesection">
        <header>
            <div class="container">
                
                <nav>
                    <a href="Home_page.php"><img src="Design/logo.png" alt="logo"></a>
                    <ul>
                        
                        <li>
                            <a href="#homesection">Home</a>
                        </li>
                        <li>
                            <a href="#Plants">Plants</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="log_in.php">Login</a>
                        </li>
                                               
                    </ul>

                </nav>
            </div>

            </header>
            <!--header end here-->
            <div class="container" id="intro">
                <h1>Online Plant Nest</h1>
                <p> 
                "Online Plant Nest" is comprised of several thousand small 
                family businesses. These businesses may grow, sell, install and maintain plants for landscaping. According to the
                 research done by USDA’s Economic Research Service, the nursery and greenhouse industry is by far the fastest growing
                  aspect of U.S. agriculture. Different nursery jobs will produce organic matter in the form of pruning trees and reducing
                   waste. Plant nurseries and greenhouses are the top five goods that grow plants in over 25 states. The nursery and landscape
                   industry is a great side business for owners of a large amount of agriculture. Many higher-end nurseries with lots of 
                   experience, started by working on dairy or grain farms or as a simple hobby or family job. In addition, the nursery business 
                   is Internet-friendly, and many companies will do direct sales through mail orders and different websites. </p>
            </div>
                      
</div>
            <!--home section end here--> 
<main id="Plants">
    <?php
    $flag = (int)7;
    if ($result->num_rows > 0) {
        while($flag != 0 && $row = $result->fetch_assoc()) {

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
        $flag--;
        }
    } else {
        echo "0 results";
    }
    ?>
    <div class="seemore"><a href="display_plants.php"><button>See More</button></a></div>
    
</main>
   
<footer >
        <div class="container" id="contact">
                    
            <div class="connectcontainer">
                <div class="title">
                <p>Contact with us</p>
                </div>
            <p>
                Hajee Mohammad Danesh Science & Technology University,
                Basherhat, Dinajpur
            </p>
            <p>
                abidamubdi@gmail.com<br>
                sabrinamomotaj@gmail.com
            </p>
            </div>
            <!--connectcontainer-->
        </div>
</footer> 
            
</body>
</html>