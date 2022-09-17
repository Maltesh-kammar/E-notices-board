<?php
session_start();
if(isset($_POST['userid'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"enotice");
  $userid = $_POST['userid'];
  $query = "DELETE FROM users WHERE userid='$userid'";
  $query_run = mysqli_query($connection,$query);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>e Notice Board System</title>
   
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    
    <link rel="stylesheet" href="../css/style.css">
</head>
  <body>
   <section id="login_form" action="" method="post">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>delete form</h4></center>
          <form action="" method="post">
          <div class="form-group">
              <lable>User id</label>
                <input class="form-control" type="text" name="noticesid" placeholder="notices id">
            </div>
            <button  type="submit" class="btn btn-primary" name="userid" id="userid">delete</button>
         </form>
       </div>
      </div>
    </section>
  </body>
</html>
