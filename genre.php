<!DOCTYPE html>
<?php 
include("connect.php")
 ?>


<html>
<head>
<title>Qalbum</title>
<link rel="stylesheet" href="css/albumcss.css">
</head>
<body>
<div id="container">
	<?php include('header.php');?>
	
	<main>

	  <form action="genre.php" method="POST">
               <table>
               <tr>
		                         <td>Genre</td>
					 <td><input list="genre" id="genre" name="genre"></td>
					 <datalist id="genre">
							<option>Blues</option>
							<option>Ragae</option>
							<option>R&B</option>
							<option>Jazz</option>
                            <option>Rap</option>
                            <option>Country</option>
				   	 </datalist>
                  </tr>
                  <tr>
                 <td></td>
                 <td><input type="submit"  value="Insert Genre" id="submit" name="submit"></td>
                  </tr>
              </table>
		<?php

		 /*
          Attempt MySQL server connection.
         */
		if (isset($_POST['submit'])) {
			$link = mysqli_connect("localhost", "root", "pass", "album");

			// Check connection


			if ($link === false) {
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Escape user inputs for security
			$id = mysqli_real_escape_string($link, $_POST['id']);
			$genre = mysqli_real_escape_string($link, $_POST['genre']);


			// attempt insert query execution

			$sql = "INSERT INTO genre (id, genre) VALUES ('$id','$genre')";

			if (mysqli_query($link, $sql)) {
				echo "Records added successfully.";
			} else {
				echo "ERROR: Could not execute $sql. " . mysqli_error($link);
			}
	        	}
		// close connection
		mysqli_close($link);
		?>
          </form>
	</main>
	<?php include ('footer.php') ?>
	
</div>
</body>
</html>


