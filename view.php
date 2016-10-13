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



$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "album";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT a.name,s.title,g.genre FROM artiste a  JOIN song s ON a.id= s.id  JOIN genre g ON s.id=g.id limit 5 ";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<table border='1' width='400' height='300'>
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
            echo '<td width=250>';
            echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
            echo '&nbsp;';
            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
            echo '</td>';
        }
        echo "</table>";

    }
} else {
    echo "no results";
}

mysqli_close($link);
?>

	</main>

    <?php include ('footer.php') ?>

</div>
</body>
</html>


