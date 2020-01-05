<!DOCTYPE html>
<html>
<head>
<title>Config File</title>
</head>
<body>
 <?php
   require_once "Config.php";
   $sql = "CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
    )";
   if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
   }else{
     echo "ERROR : could not execute $sql. " .mysqli_error($link);
       }
 ?>
</body>
</html>
 