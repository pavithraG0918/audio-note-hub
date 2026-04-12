<!DOCTYPE html>
<html>
<head>
<title>Home | Audio Notes Hub</title>
<style>
body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
    height:100vh;

    background:
      linear-gradient(rgba(43,179,177,0.85), rgba(43,179,177,0.85)),
      url('bg.jpg');
 background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;
}
/* ===== CARD ===== */
.card{
    background:#ffffff;
    width:420px;
    padding:45px;
    border-radius:25px;
    box-shadow:0 18px 40px rgba(0,0,0,0.35);
    text-align:center;
}
/* ===== TITLE ===== */
h1{
    color:#0f3f3f;      /* dark teal */
    margin-bottom:8px;
    letter-spacing:1px;
}
.sub{
    color:#555;
    margin-bottom:30px;
}
/* ===== BUTTON COMMON ===== */
.btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:30px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    outline:none;
 transition:background 0.3s ease,
               transform 0.3s ease,
               box-shadow 0.3s ease;
}
/* ===== LOGIN BUTTON ===== */
.login{
    background:#1f2933;
    color:white;
    margin-bottom:15px;
}
.login:hover,
.login:focus,
.login:active{
    background:#1f8f8d;
    transform:translateY(-4px) scale(1.02);
    box-shadow:0 10px 25px rgba(43,179,177,0.6);
}

.signup:hover,
.signup:focus,
.signup:active{
    background:#000;
    transform:translateY(-4px) scale(1.02);
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

.footer{
    margin-top:25px;
    font-size:13px;
    color:#777;
}
</style>
</head>
<body>
<div class="card">
    <h1>Audio Notes Hub</h1>
    <p class="sub">A smart audio learning platform</p>

    <button class="btn login" onclick="location.href='login.php'">
        Login
    </button>

</div>

</body>
</html>
