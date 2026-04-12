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
            background-image: url('images/login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
a{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color:wheat;
    }


a:hover
{
    color: gray;
}
   
   
   
.box{

    background: #444242;
    top: 70%;
    left: 50%; 
    position: absolute;
    transform: translate(-50%,-70%);
    box-sizing: border-box;  
    border-radius: 40px;
    padding: 20px 20px;
    width: 320px;
    border: 3px solid aqua; 
    margin-bottom: 20%;
}



h2{
    margin: 0;
    padding: 0px;
    text-align: center;
    font-size: 22px;
    color:hsl(190, 54.40%, 42.20%);
}

h4{
    color: darkgrey;
    margin: 0;
    padding: 4px;
    font-weight: bold;
}

input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type="text"], input[type="email"], input[type="text"], input[type="number"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color:hsl(190, 54.40%, 42.20%);
    font-size: 16px;
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: rgb(63, 118, 119);
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.login{
    width: 90px;
    height: 90px;
    position: absolute;
    top: -77px;
    left: calc(50% - 50px);
    border-radius:35px;
    border: 3px solid aqua; 

}

select{   
background:#444242;
border: 2px solid aqua; 
outline: none;
border-radius: 10px;; 
padding: 3px;
color:hsl(190, 54.40%, 42.20%);
} 
</style>
</head> 


<body> 
<br>
<center>
<h1 style="color:rgb(52, 195, 197); -webkit-text-stroke: 1px rgb(29, 199, 233);" >AUDIO NOTES HUB</h1>
</center>
<div class="box"> 
<form name="login" action="add.php" method="POST">

<img src="images/LOGO.png" class="login">

<h2>SIGN UP</h2> 
<h4>Name</h4> 
<input type="text" name="name" placeholder="Enter Name" required=""> 
<br>
<h4>Class</h4> 
<input type="number" name="class" min="0" max="12" required="" value="0">
<br>
<h4>Email</h4> 
<input type="email" name="email" placeholder="Enter Email" required=""> 
<br>
<h4>Password</h4> 
<input type="text" name="password" placeholder="Enter Password" required="">  
<br>
<h4>Role</h4>  
<select name="role">
<option name="role" value="student">Student</option>
<option name="role" value="staff">Staff</option>
</select>
<br><br>
<input type="submit" name="submit" value="SIGN UP">
<br><br>
<center>
<a href="access.php"  style="margin-right:2.5%; color:rgb(49, 147, 166);border: 3px solid aqua; border-radius: 40px; padding:6px;"><b>ACCESS PERMISSION</b></a> 
</center> 
</form>  
</div> 

<?php 
$co=0;
  if(isset($_POST['submit'])) 
{ 
    $name=$_POST['name'];
	$email = $_POST['email'];
    $class=$_POST['class'];
	$password = $_POST['password']; 
	$role = $_POST['role'];
    $a="select * from register";
    $res=$con->query($a);
    while($row=$res->fetch_assoc())
    {
       if($row['email']==$email){
        $co++;
       }
    }
     
    if($co==0)  
    {
        $sql="INSERT INTO register (name,email,password,role,class) VALUES('$name','$email','$password','$role','$class')";
        if($con->query($sql)) 
            {      
    ?> 
            <script>
              alert('One Access Added Successfully');
              window.open('access.php','_self');
            </script>
    <?php
            } 
    }
    else
    {
?>
    <script>
    alert('the user email id is already');
    </script>
<?php    
    }

}
?>
</body>
</html>