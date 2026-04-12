<?php 
$server_name="localhost"; 
$user_name="root"; 
$password= "";
$database="audio_notes_hub"; 

$con=new mysqli($server_name,$user_name,$password,$database); 
if($con->connect_error)  
	echo("Connection Falid");  
?>


<?php 
    $email= $_REQUEST['abc'];

    $qry = "DELETE FROM `register` WHERE `email`='$email'";
    $run = mysqli_query($con,$qry);

    if($run==true){
    ?>  <script>
        alert('One Access Removed Successfully');
        window.open('access.php','_self');
        </script>
    <?php
}
?>