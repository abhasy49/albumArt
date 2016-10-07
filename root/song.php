
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
	<?php include ('footer.php') ?>
<?php
/*
Attempt MySQL server connection.
*/
$link = mysqli_connect("localhost", "root", "pass", "album");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

$id = mysqli_real_escape_string($link, $_POST['']);
$title = mysqli_real_escape_string($link, $_POST['title']);
$releaseDate = mysqli_real_escape_string($link, $_POST['release_date']);
$trackNr = mysqli_real_escape_string($link, $_POST['music_group']);

// attempt insert query execution
$sql = "INSERT INTO song (id, title, release_date,track_nr) VALUES ('$id', '$title', '$releaseDate','$trackNr')";



if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
</div>
</body>

</html>


