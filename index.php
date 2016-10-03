<?php 
include("connect.php")
 ?>


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
		 <li><a href="index.php">Artiste</a></li>
		 <li><a href="genre.php">Genre</a></li>
		  <li><a href="song.php">Songs</a></li>
		 <div style="clear:both;"></div>
		</ul>
       </nav>
	
	<main>
	  <form action="index.php" method="POST">
               <table>
               <tr>
		  <td><label for="name">Name</label></td>
		<td> <input type="text" required name="name" id="name"  placeholder="name"  ></td>
		 <tr>
                 <tr>
		 <td><label for="dob">Date of Birth</label></td>
		 <td><input type="text" name="dob" id="dob"  placeholder="Date of Birth" required><td>
                </tr>
                <tr>
		 <td><label for="group">Music Group</label></td>
		 <td> <input type="text" name="group" id="group"  placeholder="Music Group" required></td>
                </tr>
                <tr>
                 <td></td>
                 <td><input type="submit" value="Insert track"></td>
                </tr>
		</table>
          </form>
	</main>
	<footer>Designed Hassan</footer>
<?php
$name = $_POST["name"];
$dob = $_POST["dob"];
$group = $_POST["group"];


$sql = "INSERT INTO album (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

</div>
</body>
</html>


