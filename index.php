<?php

$min = 8;
$max = 32;

$output = "sceglere una password con $min caratteri e $max caratteri"
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Password Generator</title>
</head>
<body>
  <div class="container d-flex justify-content-center mt-5">
    <form action="index.php" method="GET" >
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><?php echo $output ?></label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lunghezza Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form> 
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>