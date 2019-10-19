<?php
$name=$_POST('name');
$work=filter_input(INPUT_POST,'work');
$email=filter_input(INPUT_POST,'email');
$telephone=filter_input(INPUT_POST,'telephone');
$address=filter_input(INPUT_POST,'address');
$aadhar=filter_input(INPUT_POST,'aadhar');

if (!empty($name)||empty($work)||empty($email)||empty($address)||empty($aadhar){
	$host='localhost';
	$dbUsername='username';
	$dbPassword='password';
	$dbname='id0777102_workerdetails';
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error(',mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		$sql="INSERT INTO workerdetails(name,work,email,telephone,address,aadhar)values('$name','$work','$email','$telephone','$address','$aadhar')";
		if($conn->query($sql)){
			echo "New record is inserted successfully";
		}
	else{echo "Errot:".$sql."<br>".$conn->error;} $conn->close();
}
echo "aadhar should not be empty";
die();
}
?>

		