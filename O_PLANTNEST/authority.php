<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>Authority controls</title>
</head>


<body>
<section class="fullcontainer" id="aboutsection" >
<header>
<div class="container">

<nav>
<a href="Home_page.php"><img src="Design/logo.png" alt="logo"></a>
<ul>

<li>
    <a href="Home_page.php">Home</a>
</li>
<li>
    <a href="display_plants.php">Plants</a>
</li>                    
<li>
    <a href="add_plants.php">Add Plants</a>
</li>                    
                        
</ul>

</nav>
</div>

</header>

<table class="content-table">
<caption>plants: </caption>
    <thead>
        <tr>
            <th>plant_id </th>
            <th>plant_title</th>
            <th>plant_writer</th>
            <th>plant_price</th>
            <th>plant_quantity</th>
            <th>plant_description</th>
            <th>plant_image</th>
            </tr>
    </thead>
    <tbody>
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
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // echo "working!";
                    echo "<tr>
                    <td>" .$row["plant_id"]. "</td>
                    <td>" .$row["plant_title"]. "</td>
                    <td>" .$row["plant_writer"]. "</td>
                    <td>" .$row["plant_price"]. "</td>
                    <td>" .$row["plant_quantity"]. "</td>
                    <td>" .$row["plant_description"]. "</td>
                    <td>" .$row["plant_image"]. "</td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            

        }

            ?>
    </tbody>
</table>

<table class="content-table">
<caption>Purchase: </caption>    
<thead>
        <tr>
            <th>name</th>
            <th>contact</th>
            <th>email</th>
            <th>address</th>
            <th>plant_id</th>
            <th>plant_title</th>
            <th>amount</th>
            <th>account_type</th>
            <th>a_number</th>
            <th>t_id</th>
            </tr>

    </thead>
    <tbody>
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
            $sql = "SELECT * FROM purchase ORDER BY id DESC" ;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // echo "working!";
                    echo "<tr>
                    <td>" .$row["name"]. "</td>
                    <td>" .$row["contact"]. "</td>
                    <td>" .$row["email"]. "</td>
                    <td>" .$row["address"]. "</td>
                    <td>" .$row["plant_id"]. "</td>
                    <td>" .$row["plant_title"]. "</td>
                    <td>" .$row["amount"]. "</td>
                    <td>" .$row["account_type"]. "</td>
                    <td>" .$row["a_number"]. "</td>
                    <td>" .$row["t_id"]. "</td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            

        }

            ?>
    </tbody>
</table>

<table class="content-table">
<caption>Users: </caption>    
<thead>
        <tr>
            <th>u_name</th>
            <th>u_email</th>
            <th>permission</th>
            <th>Give permission as Authority</th>
        </tr>

    </thead>
    <tbody>
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
            $sql = "SELECT * FROM sign_up ORDER BY permission desc" ;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // echo "working!";
                    $update =$row["u_email"];
                    echo "<tr>
                    <td>" .$row["u_name"]. "</td>
                    <td>" .$row["u_email"]. "</td>
                    <td>" .$row["permission"]. "</td>
                    <td><a href='permitted.php?updateid=".$update."' ><button>P</button></a><br><br>
                    <a href='not_permitted.php?updateid=".$update."' ><button>NP</button></a><br><br></td>
                   
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            

        }

            ?>
    </tbody>
</table>
</div>
</div>
</section> 
</body>
</html>