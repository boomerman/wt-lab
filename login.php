<html>
<head>
<title>login page</title>
<style>
@font-face{font-family:'Homenaje';
			 src: url('Homenaje-Regular.ttf');}
.topbar {position:absolute;height:50px;  width:100%;background-color:black;}
.heading {position:absolute;color:white; font-size:42px; font-family:Homenaje;margin-left:30px;}
.content {position:absolute;color:black;margin-top:200px;margin-left:400px;font-size:72px;font-family:Homenaje;font-satyle:bold;}
#in {position:absolute;margin-top:330px;margin-left:350px; font-size:50px;font-family:Homenaje;}
#up {position:absolute;margin-top:330px;margin-left:500px; font-size:50px;font-family:Homenaje;}
#or {position:absolute;margin-top:500px;margin-left:570px; font-size:30px;font-family:Homenaje;}
form {position:absolute;margin-top:400px; font-size:30px;font-family:Homenaje;}
.mail {margin-left:-22px;}
.user {margin-left:-40px;}
.pass {margin-left:-32px;}
.repass {margin-left:-110px;}
.submit {padding:5px 50px;background-color:transparent;border:2px solid black; border-radius:10px; margin-left:80px; }
.singin {margin-left:350px;}
.enterpass {margin-left:445px;}
.enter {padding:5px 50px;background-color:transparent;border:2px solid black; border-radius:10px;margin-left:400px; }
.signup {padding:5px 50px;background-color:transparent;border:2px solid black; border-radius:10px;margin-left:20px; }
.forgot {font-size:20px;padding-top:20px; margin-left:10px;}
.forgot:hover {color:black;}

.php{position:absolute; margin-top: 800px;}
</style>
</head>
<body>
<div><div class="topbar"></div>
<div class="heading">The Poetic Artist</div></div>
<div class="content"><strong> Welcome Artists :D</strong></div>


<div id="up">sign-in</div>

<form action="login.php" method="POST">
<div class="singin">Username/Email-id:
<input type="text" name="signin"></div><br>

<div class="enterpass">Password:
<input type="text" name="enterpass"></div><br>

<input type="submit" class="enter" name="submit" value="Enter">
<!--input type="submit" class="signup" value="signup">-->
<a class="forgot" href="forgotpassword.html">forgot Pasword?</a>
</form>
<div class="php">
<?php 
if(isset($_POST['submit']))
{
	$a=$_POST['signin'];
    $p=$_POST['enterpass'];
    echo "Emailid= $a <br/>";
    echo "password= $p";

}
?></div>
</body>


</html>