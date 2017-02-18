<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportDrinkApp Brand Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/myCss.css" rel="stylesheet">

  </head>

  <body><br><br>
    <?php include 'nav.php' ?>
    <div class="container">
      <form action="addBrand.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Brand</h1>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" class="form-control"/>

        <label for="city">City:</label>
        <input type="text" name="city" class="form-control"/>

        <label for="state">State:</label>
        <input type="text" name="state" class="form-control"/>

        <label for="manufacturer">Manufactuer:</label>
        <input type="text" name="manufacturer" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
  </body>
</html>