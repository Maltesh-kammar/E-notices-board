<?php
if(isset($_POST['send_notice'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"enotice");
  $query = "insert into notice values('$_POST[date]','$_POST[to]','$_POST[title]','$_POST[message]')";
  $query_run = mysqli_query($connection,$query);
 
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Notice</title>
  </head>
  <body>
      <center><h3>Send Notice Form</h3></center>
      <br>
      <div class="row">
        <div class="col-md-4 m-auto block">
        <form action="" method="post">
          <div class="form-group">
              <label>To Whom:</label>
              <select class="form-control" name="to">
                <option>To All</option>
               </select>
          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="date">
          </div>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary"name="send_notice">Send Notice</button>
        </form>
      </div>
</div>
  </body>
</html>
