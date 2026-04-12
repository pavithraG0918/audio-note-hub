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
    top: 100px; 
    bottom: auto;
    position: relative;
    box-sizing: border-box;  
    border-radius: 40px;
    padding: 35px 35px;
    width: auto;
    height: auto;
    border: 3px solid #e9bb6e;

}



h4{
    color:darkgrey;
    margin: 0;
    padding: 0;
    font-weight: bold;
}
th,td{
    padding: 15px;
    padding-left: 35px;
    padding-right: 35px;
}

td{
    color: wheat;
}

a:hover{
    color: black;
}

</style>
</head> 
<body> 
<br> 
<br> 

<h4><a href="staff.php" target="_self" style="float: right; margin-right:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:6px;font-size:20px;">DATA UPDATION</a></h4>
    <h4><a href="login.php" target="_self" style="float: left; margin-left:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:6px;font-size:20px;">LOGOUT</a></h4>
    <br><br>
<div class="box"> 
<table width='100%' border="5px solid" style="margin-left: auto; margin-right:auto; margin-top:auto; font-weight:bold;border-spacing: 5px 5px;position:relative;">
    <tr style="background-color:antiquewhite;">
        <th>NAME</th>
        <th>EMAIL ID</th>
        <th>PASSWORD</th>
        <th>ROLL</th>
        <th>ACTION</th>
    </tr>

    <?php
    $query= "SELECT * FROM `register`";
    $run= mysqli_query($con,$query);

 if(mysqli_num_rows($run)<1)  
{
        echo "<tr><td colspan='5'>No access found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++; 
       ?>
        <tr align="center">
           
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>  
            <td><?php echo $data['role']; ?></td> 
            <td><a href="delete.php?abc=<?php echo $data['email']; ?>">REMOVE</a></td>
          
        </tr>
      <?php  
        }
    }
    ?>
</table>    
<br>
<br>
<center>
<a href="add.php"  style="margin-right:2.5%; color:darkgoldenrod;border: 3px solid #e9bb6e; border-radius: 40px; padding:5px; font-size:23px;"><b>ADD NEW ACCESS</b></a> 
</center> 
</div> <div><p>
<br><br><br><br><br><br><br><br></p></div>
</body> 
</html>