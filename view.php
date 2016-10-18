<!DOCTYPE html>
<html>
<head>
<title>Qalbum</title>
<link rel="stylesheet" href="css/albumcss.css">
</head>
<body>
<div id="container">
    <header>
        <div id="head1">
            <img src="img/albm.jpeg" alt="logo">
        </div>
        <div id="head">
            <h3>Q-album</h3>
        </div>
    </header>
    <nav>
        <ul>



        </ul>
    </nav>
	<main>
        <div id="resultset">

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

$sql = "SELECT  *  FROM artiste";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<table border='1' width='400' height='300'>
		<tr>
	<th>Name</th>
	<th>Title</th>
	<th>Genre</th>
	<th>Photo</th>
	<th>Action</th>
		</tr>";

// start a table tag in the HTML

        while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results

            echo "<tr>";
            echo "<td>" . $row['l_name'] . "</td>";
            echo "<td>" . $row['f_name'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['image'] . "</td>";
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
 </div>
	</main>
    <a href="index.php"><img src="img/hom.jpeg" alt="next page"></a>
    <?php include ('footer.php') ?>

</div>
</body>
</html>


