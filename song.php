
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
	  <form action="song.php" method="POST">
               <table>
               <tr>
		  <td><label for="title">Title</label></td>
		<td> <input type="text" required name="title" id="title" ></td>
		 <tr>
                 <tr>
		 <td><label for="rd">Release Date</label></td>
		 <td><input type="text" name="rd" id="rd"  placeholder="Release Date" required  > <td>
                </tr>
                <tr>
                 <td></td>
                 <td><input type="submit" value="Insert Song" name="submit_all"></td>
                </tr>
		</table>
          </form>
	</main>
	<?php include ('footer.php') ?>
<?php
 session_start();


/*
Attempt MySQL server connection.
*/

if (isset($_POST['submit_all'])){

    $link = mysqli_connect("localhost", "root", "pass", "album");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

     $id = mysqli_real_escape_string($link, $_POST['']);
     $title = mysqli_real_escape_string($link, $_POST['title']);
     $releaseDate = mysqli_real_escape_string($link, $_POST['rd']);
     $trackNr = mysqli_real_escape_string($link, $_POST['track_nr']);

 //Declaring session variables

        $_SESSION['id'] = $id;
        $_SESSION['title'] = $title;
        $_SESSION['rd'] = $releaseDate;


// attempt insert query execution

    $sql = "INSERT INTO song (id,title,release_date) VALUES ('$id', '$title', '$releaseDate')";

    $sql = "INSERT INTO artiste (id,f_name,l_name,dob) VALUES ('$id', '$fname', '$lname','$dob')";

    $sql = "INSERT INTO genre (id, genre) VALUES ('$id','$genre')";



     if (mysqli_query($link, $sql)) {
         echo "Records added successfully.";
     } else {
         echo "ERROR: Could not  execute $sql. " . mysqli_error($link);
     }

// close connection
     mysqli_close($link);}

?>
</div>
</body>

</html>


