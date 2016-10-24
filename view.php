<?php
$servername = "localhost";
$username = "root";
$password = "pass";

try {
    $conn = new PDO("mysql:host=$servername;dbname=album", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT image FROM images";


}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>



<html>
<head><title>Test</title></head>
<body>

<?php  foreach ($conn->query($sql) as $row){

    $imageId = $row['id'];
    echo '<img src="view.php?id= ' .$imageId . '"  height="100" width="100"/>';
}
?>


</body>



</html>