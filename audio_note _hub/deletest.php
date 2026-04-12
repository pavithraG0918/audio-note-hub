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
    $audio_notes=$_REQUEST['bcd'];

    $qry = "DELETE FROM `staff_data_update` WHERE `audio_notes`='$audio_notes'";
    $run = mysqli_query($con,$qry);

    if($run==true){
    ?>  <script>
        alert('One DATA Removed Successfully');
        window.open('studentview.php','_self');
        </script>
    <?php
}
?>