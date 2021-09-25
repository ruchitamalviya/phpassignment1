<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Task1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="container mt-3 bg-success">
    <h5 class="text-center text-uppercase py-3">Find the Postion of alphabets</h5> </div>
  <div class="col-lg-12">
    <div class="container py-4">
      <form method="get" action="">
      <input type="text"  class="form-control" name="str" value="<?=($_GET)?$_GET['str']:''?>">
      <input type="submit" name="submit" class="btn btn-success mt-4 px-5">
    </form>
      </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
  if(isset($_GET['submit'])){
    $str=$_GET['str'];
    $str_length=strlen($str);
    $result=" ";
    echo '<div class="col-md-8">';
      for($i=0;$i<$str_length; $i++){
        $code = ord(strtoupper($str[$i]));
        if($code > 64 && $code < 91){
          $result=$code-64;
          echo "<li>The Index of ".$str[$i]." ".$result. "<br></li>";
        }else{
          echo $str[$i]." is not an alphabet";
        }
      }
    echo '</div>';
  }
?>