<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  if(strlen($name)<=8){
    // echo "<span style='color=red;'>name should be more than 8 charecter</span>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
  Name: <br><br>
  <input type="text" name="name"><br>
  <br>
  <input type="submit" value="submit" name="submit">
  </form>
  <br>
  <form action="" method="POST">

  Email: <br><br>
  <input type="text" name="email"><br>
  <br>
  <input type="submit" value="submit" name="submit">
  </form>
  <br>
  <form action="" method="POST">

  Date Of Birth: <br><br>
  <input type="text" name="email"><br>
  <br>
  <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>