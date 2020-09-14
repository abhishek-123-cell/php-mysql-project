<?php
$insert=false;
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("my server not connecting".mysqli_connect_error());  
}
echo("connceted");

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$contact=$_POST['contact'];


 $sql="INSERT INTO `radha`. radha (`name`, `email`, `gender`, `contact`) VALUES ( '$name', '$email', '$gender', '$contact' );";
 echo $sql;
if($con->query($sql)==true){

//echo ("sucecssfully connected");
$insert=true;
 
}
else{
    echo "error:$sql <br>$con->error";
}
$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>travel project</title>
         <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>
submit your details to the counter
</h1>
<?php

if($insert==true){
echo "<p class='msg'>submmit your detail to the counter regarding the travel trip.</p>";
}
?>
</div>
<div id="id">
<form action="home.php" method="POST"><br>
<input type="text" name="name" id="name" placeholder="name" required>
<input type="email" name="email" id="email" placeholder="email" required>
<input type="text" name="gender" id="gender" placeholder="gender" required>

<input type="phone" name="contact" id="contact" placeholder="contact" required>


<br>
<button class="btn">submit</button>

</form>

</div>
</body>
</html>