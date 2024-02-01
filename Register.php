<?php
$conn=mysqli_connect("localhost","root","","abc_college");
$name=$_POST['name'];
$father_name=$_POST['father_name'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$DOB=$_POST['DOB'];
$password=$_POST['password'];
$role=$_POST['role'];
$C_password=$_POST['C_password'];
$gender=$_POST['gender'];
$sql="insert into details(name,father_name,phone_no,DOB,email,password,C_password,role,gender)values('$name','$father_name','$phone_no','$DOB','$email','$password','$C_password','$role','$gender')";
$result=mysqli_query($conn,$sql);
if($result){
 
    header("Location:signindashboard.php");
}



?>



<!-- CREATE TABLE `abc_college`.`details` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `father_name` VARCHAR(50) NOT NULL , `DOB` DATE NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(20) NOT NULL , `C_password` VARCHAR(20) NOT NULL , `gender` TEXT NOT NULL , `created_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `modified_by` VARCHAR(20) NOT NULL , `modified_date` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `role` VARCHAR(20) NOT NULL ) ENGINE = InnoDB; -->