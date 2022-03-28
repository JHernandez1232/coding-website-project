<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>E-commerce Project</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>

  <form method="get">
    <input type="text" name="person">
    <button>SUBMIT</button>
</form>

  <?php
  $name = $_GET ['person'];
  echo $name." goes on to say that harsh likes to fly like a pony!!";
  

  ?>
<a href = "array.php">
  <button>array</button>
</a>
  </body>
</html>