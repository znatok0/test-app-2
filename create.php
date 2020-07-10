<style>
    <?php include 'main.css'; ?>
</style>
<script type="text/javascript" src="main.js"></script>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "chesscom123", "testapplication");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$iin = mysqli_real_escape_string($link, $_REQUEST['iin']);
$result = '5432';
 
// Attempt insert query execution
$sql = "INSERT INTO testapplication (full_name, email, iin, result) VALUES ('$full_name', '$email', '$iin', '$result')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>