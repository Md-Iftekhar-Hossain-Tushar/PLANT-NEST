<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>User controls</title>
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
                        
</ul>

</nav>
</div>

</header>

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
        if(mysqli_connect_error())
        {
            die("connection Error".mysqli_connect_errno());
        }
        if($conn)
        {
            // echo "working!";
            $sql = "SELECT * FROM purchase where email = $id ORDER BY id DESC" ;
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
         }
            ?>
    </tbody>
</table>


</div>
</div>
</section> 
</body>
</html>