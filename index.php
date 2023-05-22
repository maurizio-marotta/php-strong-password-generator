<?php

require_once('./functions.php');

$min = 8;
$max = 32;


if(empty($_GET['length'])){
  $output = "scegliere una password con $min caratteri e $max caratteri";

}else{
  if($_GET['length'] < $min || $_GET['length'] > $max ){
    $output = "! inserire una password con un minimo di $min caratteri e un massimo di $max !";
  }else{
    $output = genPassword($_GET['length']);
  }
};

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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" >
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" name="length" id="length"><?php echo $output ?></label>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lunghezza Password</label>
        <input type="number" name="length" class="form-control" id="length">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form> 
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>