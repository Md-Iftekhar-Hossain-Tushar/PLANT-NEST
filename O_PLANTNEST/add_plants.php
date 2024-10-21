<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_plants.css">
    <title>Adding Plants</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Add Plants:</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="add_plants_php.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="plant_title">Name: </label>
                    <br>
                    <input type="text" name="plant_title" id="plant_title" placeholder="Enter plant name" required >
                </div>
                <br>
                <br>
                
                <div>
                    <label for="plant_price">Price: </label>
                    <br>
                    <input type="text" name="plant_price" id="plant_price" placeholder="Enter plant price" required>
                 </div>
                 <br>
                 <br>
                <div>
                    <label for="plant_quantity">Plant Quantity: </label>
                    <br>
                    <input type="text" name="plant_quantity" id="plant_quantity" placeholder="Enter plant quantity" required>
                 </div>
                 <br>
                 <br>
                <div>
                    <label for="contact">Description: </label>
                    <br>
                    <input type="text" name="plant_description" id="plant_description" placeholder="Enter plant description">
                 </div>
                 <br>
                 
                 <br>
                 <div>
                    <label for="plant_image">Attach plant photo:</label>
                    <br>
                    <input type="file" name="plant_image" id="plant_image">
                 </div>
                 <br>

                 <br>
                 <br>
                 <div class="submit_text">
                    <input type="submit" value="Add plant">
                </div>
                <br>
                 


            </form>
        </div>

    </div>
</body>
</html>