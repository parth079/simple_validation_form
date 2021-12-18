<?php
$connect=mysqli_connect("localhost","root","","phpclasses") or die("Connection Failed");
if(!empty($_POST['save']))
{
	$username=$_POST['un'];
	$password=$_POST['pw'];
	$query="select * from login where username ='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{	
		echo "Login Successful";
	}
	else{
		echo "Login not successfull";
	}
}

?>

<form method ="post">
Enter	username <input type="text" name="un">
	<br/><br/>
Enter Password <input type="password" name="pw">
	<br/><br/>
<input type="submit" name="save" value="Login"/>
</form>
