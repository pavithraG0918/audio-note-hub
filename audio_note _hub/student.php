<?php 
$server_name="localhost"; 
$user_name="root"; 
$password= "";
$database="audio_notes_hub"; 

$con=new mysqli($server_name,$user_name,$password,$database); 
if($con->connect_error)  
	echo("Connection Falid");  
    session_start();
?>

<html> 
<head> 
<title>AUDIO NOTES HUB</title>  

<style>  
body {
            background-image: url('images/student.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
a{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: black;
    }
   
.box{

    background:#ffbf00;
    top: 300px;
    padding-top: 300px;
    left: 50%; 
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;  
    border-radius: 40px;
    padding: 20px 20px;
    width: auto;
    border: 3px solid #331a00;
}
h4{
    color:darkgrey;
    margin: 0;
    padding: 0;
    font-weight: bold;
}
th,td{
    padding: 10px;
    padding-left: 25px;
    padding-right: 25px;
}
</style>
</head> 
<body> 
<br> 
<br> 
    <h4><a href="login.php" target="_self" style="float: left; margin-left:2.5%; color:rgb(173, 111, 2);border: 3px solid rgb(173, 111, 2); border-radius: 40px; padding:8px;font-size:25;">LOGOUT</a></h4>
    </div><br><br>
<div class="box"> 
<table width='100%' border="5px solid" style="margin-left: auto; margin-right:auto; margin-top:auto; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: #ffc180;">
        <th>SUBJECT NAME</th>
        <th>UNIT</th>
        <th>DATE</th>
        <th>STAFF  ID</th>
        <th>NOTES/COMMENDS</th>
        <th>AUDIO NOTES</th>
    </tr>

    <?php
    $cl=$_SESSION['id'];
    $query= "SELECT * FROM `staff_data_update` WHERE class = '$cl'";
    $run= mysqli_query($con,$query);

 if(mysqli_num_rows($run)<1)  
{
        echo "<tr><td colspan='6'>No data found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++; 
       ?>
        <tr align="center">
           
            <td><?php echo $data['subject_name']; ?></td>
            <td><?php echo $data['unit']; ?></td>
            <td><?php echo $data['date']; ?></td>  
            <td><?php echo $data['staff_id']; ?></td> 
            <td><?php echo $data['notes']; ?></td>  
            <td><audio controls><source src="audios/<?php echo $data['audio_notes'];?>" type="audio/mpeg"></audio> </td> 
        </tr>
      <?php  
        }
    }
    ?>
</table>     
</div> 
</body> 
</html>