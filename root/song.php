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
                  <li><a href="view.php">View</a></li>
		 <div style="clear:both;"></div>
		</ul>
       </nav>
	
	<main>
	  <form action="song.php">
               <table>
               <tr>
		  <td><label for="title">Title</label></td>
		<td> <input type="text" required name="title" id="title"  placeholder="Title"  ></td>
		 <tr>
                 <tr>
		 <td><label for="dob">Release Date</label></td>
		 <td><input type="text" name="rd" id="rd"  placeholder="Release Date" required><td>
                </tr>
                <tr>
		 <td><label for="group">Track Number</label></td>
		 <td> <input type="text" name="track_nr" id="track_nr"  placeholder="Track number" required></td>
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

 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$title  = mysqli_real_escape_string($link, $_POST['title']);
$releaseDate = mysqli_real_escape_string($link, $_POST['rd']);
$trackNr = mysqli_real_escape_string($link, $_POST['track_nr']);
// attempt insert query execution

$sql = "INSERT INTO song (id,title,release_date,track_nr) VALUES ('$id', '$title','$releaseDate','$trackNr')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not  execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
</div>
</body>
</html>


