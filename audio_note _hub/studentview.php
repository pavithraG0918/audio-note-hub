<?php 
$server_name="localhost"; 
$user_name="root"; 
$password= "";
$database="audio_notes_hub"; 
$con=new mysqli($server_name,$user_name,$password,$database); 
if($con->connect_error)  
	echo("Connection Falid");  
?>

<html> 
<head> 
<title>AUDIO NOTES HUB</title>  
<style>  
body {
            background-image: url('images/staff11.png');
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
a{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: wheat;
    }
   
.box{

    background: #444242; 
    position:relative;
    top:100px;
    bottom: auto;
    box-sizing: border-box;  
    border-radius: 40px;
    padding: 30px 30px;
    width: auto;
    border: 3px solid  #e9bb6e;
}

h4{
    color:darkgrey;
    margin: 0;
    padding: 0;
    font-weight: bold;
}
th,td{
    padding: 10px;
    padding-left: 35px;
    padding-right: 35px;
  
}

td{
    color:wheat;
}
a:hover{
    color: black;
}


</style>
</head> 
<body> 
<br> 
<br> 

<h4><a href="access.php" target="_self" style="float: right; margin-right:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:6px;font-size:20px;">ACCESS PERMISSION</a></h4>
    <h4><a href="login.php" target="_self" style="float: left; margin-left:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:6px;font-size:20px;">LOGOUT</a></h4>
    </div>
<div class="box"> 
<table width='100%' border="5px solid" style="margin-left: auto; margin-right:auto; margin-top:auto; font-weight:bold;border-spacing: 5px 5px;position:relative;">
    <tr style="background-color:antiquewhite;">
        <th>SUBJECT NAME</th>
        <th>UNIT</th>
        <th>DATE</th>
        <th>STAFF  ID</th>
        <th>NOTES/COMMENDS</th>
        <th>AUDIO NOTES</th>
        <th>ACTION</th>
    </tr>

    <?php
    $query= "SELECT * FROM `staff_data_update`";
    $run= mysqli_query($con,$query);

 if(mysqli_num_rows($run)<1)  
{
        echo "<tr><td colspan='7'>No data found..</td></tr>";
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
            <td class="kkw"><a href="deletest.php?bcd=<?php echo $data['audio_notes']; ?>">REMOVE</a></td>
          
        </tr>
      <?php  
        }
    }
    ?>
</table>    
<br>
<br>
<center>
<a href="staff.php"  style="margin-right:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:5px;font-size:23px;"><b>ADD NEW UPDATE</b></a> 
</center> 
</div> 
</body> 
</html>