<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/style.css">
    <script src="../jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('aviewp.php');
        });

        $("#create_profile_button").click(function(){
          $("#main_content").load('register.php');
        });        
        
        $("#create_notices_button").click(function(){
          $("#main_content").load('notice.php');
        });

        
          $("#view_notice_button").click(function(){
            $("#main_content").load('create.php');
          })

          $("#del_notice_button").click(function(){
          $("#main_content").load('adeln.php');
        });
        
          $("#del_profile_button").click(function(){
          $("#main_content").load('del.php');
        });

      });
    </script>
  
</head>
  <body>
    
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
          <img src="" class="img-rounded" width="200px" height="200px">
          
          <button type="button" class="btn btn-primary btn-block" id="edit_profile_button"> Profile</button>
          <button type="button" class="btn btn-primary btn-block" id="create_profile_button"> create Profile</button>
          <button type="button" class="btn btn-primary btn-block" id="create_notices_button"> create notices</button>
          <button type="button" class="btn btn-primary btn-block" id="view_notice_button">View All Notices</button>
          <button type="button" class="btn btn-primary btn-block" id="del_notice_button">Delete Notices</button>
          <button type="button" class="btn btn-primary btn-block" id="del_profile_button">Delete Profile</button>
          <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to admin Dashboard</h2>
          
        </div>
      </div>
    </section>
  </body>
</html>
