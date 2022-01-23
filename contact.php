
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database_name="db_contact";
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// database connection code
 // $conn = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtSubject = $_POST['txtSubject'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldSubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";


// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

else{
  echo "error:";
}
?>





