<!DOCTYPE html>
<html>
<head>
<title>Qalbum</title>
<link rel="stylesheet" href="css/albumcss.css">
</head>
<body>
<div id="container">
    <?php include('header.php');?>
	
	<main>
	  
<?php

$link = mysqli_connect("localhost", "root", "pass", "album");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// attempt fetch query execution

$sql = "SELECT a.name,s.title,g.genre FROM artiste a  JOIN song s ON a.id= s.id  JOIN genre g ON s.id=g.id";

$result = mysqli_query($sql,$link);
if (mysql_num_rows($result)==0){

    echo "no record returned";


} else {
    echo "<table border='1'>
		<tr>
	<th>Name</th>
	<th>Title</th>
	<th>Genre</th>
	<th>Actions</th>	
		</tr>";

// start a table tag in the HTML

    while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results

        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "</tr>";
    }
    echo "</table>"; //Close the table

}

// close connection
mysqli_close($link);
?>
	</main>
    <?php include ('footer.php') ?>

</div>
</body>
</html>


