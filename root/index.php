<?php 
//include("connect.php")
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
		 <td> <input type="text" name="music_group" id="music_group"  placeholder="Music Group" required></td>
                </tr>
                <tr>
                 <td></td>
                 <td><input type="submit" value="Insert track"></td>
                </tr>
		</table>
<?php

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$group = mysqli_real_escape_string($link, $_POST['music_group']);
 
// attempt insert query execution
$sql = "INSERT INTO artiste (id, name, DOB,music_group) VALUES ('$id', '$name', '$dob','$group')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
          </form>
	</main>
	<footer>Designed Hassan</footer>

</div>
</body>
</html>


