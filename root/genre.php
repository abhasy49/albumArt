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
		 <div style="clear:both;"></div>
		</ul>
       </nav>
	
	<main>
	  <form action="index.php">
               <table>
               <tr>
		                         <td>Genre</td>
					 <td><input list="genre"></td>
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
                 <td><input type="submit" value="Insert Genre"></td>
                  </tr>
              </table>

          </form>
	</main>
	<footer>Designed Hassan</footer>
<?php
$genre = $_POST["genre"];


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


