<?php 


$servername="localhost";
$username="id19705001_usuario";
$password="[eo^[8^3UczIP@bC";
$db="id19705001_form";



$conn = new mysqli($servername,$username, $password,$db);

if ($conn->connect_error) 
  { die ("Error: " . $sql . "<br>" . $conn->error
  );
  }
  

?>
</body>
</html>