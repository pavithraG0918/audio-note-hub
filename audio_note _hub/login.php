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
            background-image: url('images/login.png');
            background-repeat: no-repeat;
            background-size: cover;
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
}


h2{
    margin: 0;
    padding:auto;
    padding-top: 10%;
    text-align: center;
    font-size: 20px;
    color: black;
}


input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type="password"], input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #FE5C5C;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.login{
    width: 90px;
    height: 90px;
    position: absolute;
    top: -80px;
    left: calc(50% - 50px);
    border-radius:35px;
    border: 3px solid aqua; 

}

select{   
background:#444242;
border: 2px solid aqua; 
outline: none;
border-radius: 10px;; 
padding: 2px;
color: #000000;
} 
</style>
</head> 


<body> 
<br> 
<br>
<center>
<h1 style="color:rgb(68, 67, 65);">AUDIO NOTES HUB</h1>
</center>
<div class="box"> 
<form name="login" action="login.php" method="POST">

<img src="images/LOGO.png" class="login">

<h2>LOGIN</h2> 


<h4>Email</h4> 
<input type="email" name="email" placeholder="Enter Email" required=""> 

<h4>Password</h4> 
<input type="password" name="password" placeholder="Enter Password" required="">  
<br>
<h4>Role</h4>  
<select name="role">
<option name="role" value="student">Student</option>
<option name="role" value="staff">Staff</option>
</select>
<br><br>
<input type="submit" name="submit" value="Login">
</form>  
</div> 

<?php 
  if(isset($_POST['submit'])) 
{ 
	$email = $_POST['email'];
	$password = $_POST['password']; 
	$role = $_POST['role'];
	$result = mysqli_query($con, "SELECT * FROM register WHERE email = '$email' AND password = '$password' AND role= '$role'"); 
	$row = mysqli_fetch_assoc($result);
  	if(mysqli_num_rows($result) > 0) 
	{      
        $q="SELECT class FROM register WHERE email = '$email' AND password = '$password'";
        $res=$con->query($q);
        $ro=$res->fetch_assoc();
        $a=$ro['class'];
        $_SESSION['id']=$a;
                 	if($row>0 && $_POST["role"] == 'staff')
		{
			session_start(); 
			header('location:staff.php');
		}  
		else if($row>0 && $_POST["role"] == 'student')
		{
			session_start(); 
			header('location: student.php');
		}

	}

    	else
	{
	echo
      	"<script> alert('Wrong Password'); </script>";
	} 
}
?>

</body> 
</html>