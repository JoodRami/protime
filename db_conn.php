<?php
$userName = $_POST['uname'];
$fullName = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

//Database coonection
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "pro";

$conn = new mysqli('localhost', 'root', '', 'pro');
if($conn->connect_error){
	die('Connection Failed: '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO  the_user(user_name, name, password, email, phone_number)
		VALUES(?,?,?,?,?)");
		
	$stmt->bind_param("sssii",$userName, $fullName, $email, $password, $phone);
	$stmt->execute();
	echo "تم إنشاء الحساب بنجاح";
	$stmt->close();
	$conn->close();
}
?>