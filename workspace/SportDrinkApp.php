   <? php
   
    include 'dbConnection.php';
    
   $sql = "SELECT
      drinks.ID as drinks_id, drinks.name as drinksName, topseller, flavor, taste, cost, nutritional_value,
      brand.name as brandName, city, state, country
      FROM drinks JOIN brand ON brand.ID = drinks.brand_id";
    $result = $conn->query($sql);
   
   ?>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SportsDrinkApp</title>
        
        <!-- Bootstrap core CSS -->
         <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

         <!-- Custom styles for this template -->
         <link href="css/myCss.css" rel="stylesheet">
       
    
    </head>
    <body>
  
 <?php include 'nav.php' ?>
    <div class="container">

      <h1 class="form-signin-heading">SportDrinkApp</h1>

      <h2><a href="BrandForm.php">Add Brand</a></h2>
      <h2><a href="DrinkForm.php">Add Drink</a></h2>




 <?php
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $row['beerName'] . " | " . $row['style'] . " | " . $row['abv'] .
              " | " . $row['breweryName'] . " | " . $row['city'] . " | " . $row['state'] .
               " | " . $row['country'] .
               " | <a href=deleteBeer.php?beer_id=" . $row['beer_id']  ."> delete</a>" .
               " | <a href=beerForm.php?beer_id=" . $row['beer_id']  ."> update</a>" . "<br>";
          }
      }
      ?>


    </div>
       
            </div>
    </body>
</html> 