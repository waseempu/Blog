<?php

$firstName= $_POST['firstname'];
$lastName= $_POST['lastname'];
$email= $_POST['email'];

$link= mysqli_connect("localhost","root","","erozgar");
$query="INSERT INTO users (first_name,last_name,email) VALUES ('$firstName','$lastName','$email')";

$result= mysqli_query($link,$query);
if($result){
	echo 'Data Inserted';
}else{
	echo 'Error: Please go back and look at the data you entered';
}

$select= "SELECT * from users";
$res_select= mysqli_query($link,$select);
echo "Data from DB";
while($data = mysqli_fetch_assoc($res_select)){
	echo "First name: ".$data['first_name']."<br>";
	echo "Last name: ".$data['last_name']."<br>";
	echo "Email: ".$data['email']."<br>";
	
}
?>
<!DOCTYPE html>
<html>
<body>

<form method="post">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname" >
  Email:<br>
  <input type="email" name="email">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>