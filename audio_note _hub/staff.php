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
    color: black;
    }


a:hover
{
    color: gray;
}
   
   
   
.box{

 
    background:rgb(68, 66, 66);
    top: 68%;
    left: 50%; 
    position: absolute;
    transform: translate(-50%,-70%);
    box-sizing: border-box;  
    border-radius: 40px;
    padding: 20px 20px;
    width: 40%;

}

h1{
    color:hsl(190, 54.40%, 42.20%);
}
h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    color:darkgrey;
}

h4{
    color:darkgrey;
    margin: 0;
    padding: 0;
    font-weight: bold;
}

input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type="text"], input[type="email"], input[type="date"], input[type="number"], input[type="file"]
{
    border: none;
    border-bottom: dashed;
    background: transparent;
    outline: none;
    height: 40px;
    color: hsl(190, 54.40%, 42.20%);
    border-color:darkslategray;
    font-size: 16px;
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background:rgb(63, 118, 119);
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.login{
    width: 80px;
    height: 80px;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.linkr:hover{
    border: 3px solid #3eb0b4;
}
select{   
background:#ffe6e6;
border: 5px solid #ffe6e6; 
outline: none; 
} 

select:focus{ 
border:5px solid navy;  
}
</style>
</head> 
<body> 
<br> 
<br> 

<h4><div></div><a href="access.php" target="_self" style="float: right; margin-right:2.5%; color:hsl(190, 54.40%, 42.20%);border: 3px solid aqua; border-radius: 40px; padding:6px;font-size:20px;">ACCESS PERMISSION</a></h4>
    </div>
    <h4><a href="login.php" target="_self" style="float: left; margin-left:2.5%; color:hsl(190, 54.40%, 42.20%);border: 3px solid aqua; border-radius: 40px; padding:6px;font-size:20px;">LOGOUT</a></h4>
    </div><br><br>
<div class="box"> 
<form name="sale_entry" action="staff.php" method="POST">

<center>
<h1>DATA UPDATION</h1> 
</center>

<h4>Subject Name</h4>
<input type="text" name="subject_name" placeholder="Enter Subject Name" required=""> 

<h4>Unit</h4> 
<input type="number" name="unit" placeholder="Enter unit" min="1" max="8" required=""> 

<h4>Class</h4> 
<input type="number" name="class" placeholder="Enter class" min="1" max="12" required="">

<h4>Date Of Uploding</h4>
<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly />

<h4>Staff Id</h4> 
<input type="text" name="staff_id" placeholder="Enter Staff Id" required=""> 

<h4>Notes/Commentes</h4> 
<input type="text" name="notes" placeholder= > 

<h4>AUDIO FILES (only MP3 formate)</h4>
<br>
<input type="file" name="audio_notes" > 
<br>
<input type="submit" name="submit" value="Add to Data Base"> <br><br>
<h4 align="center"><a href="studentview.php" target="_self" style=" margin-left:2.5%; color:rgb(49, 147, 166);border: 3px solid aqua; border-radius: 40px; padding:5px;">VIEW AND DELETE DATA </a></h4>
</form>  
</div> 
<?php 
 $co=0;
if(isset($_POST['submit']))
{  
    $co=0;
	$subject_name=$_POST['subject_name']; 
	$unit=$_POST['unit'];   
    $class=$_POST['class'];
	$date=$_POST['date'];
	$staff_id=$_POST['staff_id'];   
	$notes=$_POST['notes'];
	$audio_notes=$_POST['audio_notes'];
    $a="select * from staff_data_update";
    $res=$con->query($a);
    while($row=$res->fetch_assoc())
    {
        if($row['audio_notes']==$audio_notes){
            $co++;
           }

    }
 
    if($co==0)
    {
	    $sql="INSERT INTO staff_data_update (subject_name,unit,class,date,staff_id,notes,audio_notes) VALUES('$subject_name','$unit','$class','$date','$staff_id','$notes','$audio_notes')";
	    if($con->query($sql)) 
	    {   
?>
		<script>
            alert('inserted succeefully');
        </script>
<?php
	    } 
    }
	else 
	{
?>
        <script>
            alert('already inserted');
        </script>
<?php
	}
} 
?>
</body> 
</html>