<!DOCTYPE html>
<html>
<head>
<title>Config File</title>
</head>
<body>
 <?php
   require_once "Config.php";
   $sql = "INSERT INTO employees (name, address, salary) VALUES 
           ('Harsh', '31st Sreet Dockyard Road', '25000'),
	   ('Kartik', 'Mira Road Bhahindar', '30000'),
           ('John' , 'Miraj Tower Borivali East', '40000')";
   if(mysqli_query($link, $sql)){
     echo "Records Inserted Successfully";
   }else{
     echo "Could not execute $sql." .mysqli_error($link);
      }

   ?>
</body>
</html>
