<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"enotice");

  if(isset($_POST['register'])){
    $query = "insert into users values('$_POST[userid]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[sem])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully');
      window.location.href = 'register.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>e Notice Board System</title>
    
  </head>
  <body>
  <center> 
  <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Registration form</h4></center>
          <form action="" method="post">
          <div class="form-group">
              <lable>User id</label>
                <input class="form-control" type="text" name="userid" placeholder="User id">
            </div>
            <div class="form-group">
              <lable>First Name:</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
              <lable>Last Name:</label>
                <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="form-group">
              <lable>Select Your Class:</label>
                <select class="form-control" name="sem">
                  <option>-Select-</option>
                  <option>1/2</option>
                  <option>3/4</option>
                  <option>5/6</option>
                  <option>7/8</option>
                  
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          
        </div>
      </div>
    </section>
</center> 
  </body>
</html>
