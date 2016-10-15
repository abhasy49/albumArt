<?php
//include("connect.php")
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Qalbum</title>
<link rel="stylesheet" href="css/albumcss.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        </script>
</head>
<body>

<div id="container">
    <?php include('header.php');?>
	
	<main>
	  <form action="index.php" method="POST">
               <table>
               <tr>
		  <td><label for="f_name">First Name</label></td>
		<td> <input type="text" required name="f_name" id="f_name"  placeholder="First Name"  ></td>
		 <tr>
                 <tr>
		 <td><label for="S_name">Last Name</label></td>
		 <td><input type="text" name="l_name" id="l_name"  placeholder="Last Name" required><td>
                </tr>
                 <tr>
		 <td><label for="DOB">Date of Birth</label></td>
		 <td> <input type="text" name="dob" id="datepicker"  placeholder="Date of Birth" required></td>
                </tr>
                <tr>
                 <td></td>
                 <td><input type="submit"  name="add" value="Insert track"></td>
                </tr>
		</table>

<?php
/*
Attempt MySQL server connection.
*/
if (isset($_POST['add'])){
$link = mysqli_connect("localhost", "root", "pass", "album");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security

    $id = mysqli_real_escape_string($link, $_POST['']);
    $fname = mysqli_real_escape_string($link, $_POST['f_name']);
    $lname = mysqli_real_escape_string($link, $_POST['l_name']);
    $dob = mysqli_real_escape_string($link, $_POST['dob']);

// attempt insert query execution
    $sql = "INSERT INTO artiste (id,f_name,l_name,dob) VALUES ('$id', '$fname', '$lname','$dob')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);}
?>
          </form>
	</main>
    <?php include ('footer.php') ?>

</div>
</body>

</html>


