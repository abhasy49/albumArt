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

	  <form action="genre.php">
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
		
		 
		// Escape user inputs for security
		$id = mysqli_real_escape_string($link, $_POST['id']);
		$genre = mysqli_real_escape_string($link, $_POST['genre']);
		
		 
		// attempt insert query execution
		
		$sql = "INSERT INTO genre (id,genre) VALUES ('$id','$genre')";
		if(mysqli_query($link, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not  execute $sql. " . mysqli_error($link);
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


