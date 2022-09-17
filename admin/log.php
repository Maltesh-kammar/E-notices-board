<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"enotice");

  if(isset($_POST['login'])){
    $query = "select * from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        echo "<script>
        window.location.href = 'adashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and passworda');

      </script>";
    }
  }
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="log.css">
</head>
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" onsubmit="return checkStuff()"action="index.php" method="post">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
         <button class="btn1" type="submit" name="login">Login</button>
      </form>
        <a href="../user\ulog.php">User Dashboard Login</a>
  </div> 
       
</div>
