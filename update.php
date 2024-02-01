<?php
$conn = new mysqli('localhost', 'root', '', 'abc_college');
$id = $_POST['id'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$C_password = $_POST['C_password'];
$DOB = $_POST['DOB'];
$role = $_POST['role'];
$gender = $_POST['gender'];

$sql = "update student set name='$name',father_name='$father_name',phone_no='$phone_no',email='$email',password='$password' ,C_password='$C_password', role='$role',gender='$gender',where id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "alert('Data Added')";
    header("Location:show_data/admin_fetch.php");

}