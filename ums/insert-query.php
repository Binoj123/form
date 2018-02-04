<?php require_once('inc/connection.php') ?>
<?php
//print_r($_POST);

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];

$query = "INSERT INTO user(f_name,l_name,email,age,gender,comment)VALUES('{$f_name}','{$l_name}','{$email}',{$age},'{$gender}','{$comment}')";

$result = mysqli_query($connction,$query);
if ($result) {
  echo "1 record added";
}else {
  echo "database query failed.";
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert query</title>
  </head>
  <body>

  </body>
</html>
