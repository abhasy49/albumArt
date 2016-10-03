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
	  <form action="index.php">
               <table>
               <tr>
		  <td><label for="title">Title</label></td>
		<td> <input type="text" required name="title" id="title"  placeholder="title"  ></td>
		 <tr>
                 <tr>
		 <td><label for="dob">Release Date</label></td>
		 <td><input type="text" name="rd" id="rd"  placeholder="Release Date" required><td>
                </tr>
                <tr>
		 <td><label for="group">Track Number</label></td>
		 <td> <input type="text" name="track_nr" id="track_nr"  placeholder="track number" required></td>
                </tr>
                <tr>
                 <td></td>
                 <td><input type="submit" value="Insert Song"></td>
                </tr>
		</table>
          </form>
	</main>
	<footer>Designed Hassan</footer>
<?php
$title = $_POST["title"];
$releaseDate = $_POST["rd"];
$tracknumber = $_POST["track_nr"];


$sql = "INSERT INTO album (title, release_date, track_nr)
VALUES ($title, $releaseDate, $tracknumber)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</div>
</body>
</html>


