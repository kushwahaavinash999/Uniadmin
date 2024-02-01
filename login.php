<?php
$conn = new mysqli('localhost', 'root', '', 'abc_college');
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $role=$_POST['role'];
  $select="SELECT * FROM details WHERE email='$email' and binary password='$password'and role ='$role'";
  $result=mysqli_query($conn,$select);
  if($result){
    if(mysqli_num_rows($result)){
      if ($role=='MD'){
        header("Location:show_data/admin_fatch.php");
      }
      elseif ($role=='Director'){
        header("Location:show_data/dir_fatch.php");
      }
      elseif ($role=='HOD'){
        header("Location:show_data/hod_fatch.php");
      }
      elseif ($role=='Teacher'){
        header("Location:show_data/teacher_fatch.php");
      }
      elseif ($role=='Student'){
        header("Location:show_data/student_fatch.php");
      }
    }
    else{
      
      header("Location:signin.php");
    }
  }
}



?>