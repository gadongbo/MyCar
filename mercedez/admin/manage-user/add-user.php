
<?php
  if(isset($_POST["addUser"]))
  {
      //check if its an ajax request, exit if not
      if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
          die();
      }  
    
         
    
      //trim and lowercase username
      $userName =  strtolower(trim($_POST["userName"]));
    
      //sanitize username
      $userName = filter_var($userName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
      //check username in db
      $results = mysqli_query($conn,"SELECT id FROM  WHERE user_name='$userName'");
    
      //return total count
      $username_exist = mysqli_num_rows($results); //total records
    
      //if value is more than 0, username is not available
      if($username_exist) {
          echo 'da ton tai';
      }else{
          echo 'ok';
      }
    
      //close db connection
      
  }
?>
<div class="d-flex justify-content-between align-items-center mt-3">
    <h2>Add User</h2>
    <a href="index.php?page_layout=user">
        <button type="button" class="btn btn-primary">Back</button>
    </a>
</div>
<form action="<?php echo SITEURL . "admin/index.php?page_layout=user&action=add" ?>" method="post" style="width: 80%;">
    <div class="mb-3 row">
        <label for="userName" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="userName" name="userName" placeholder="user name">
            <span id="user-result"></span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" placeholder="address">
        </div>
    </div>

    <button type="submit" name="addUser" class="btn btn-primary">Submit User</button>
</form>
<script>
    $("#userName").keyup(function (e) { //user types username on inputfiled
    var userName = $(this).val(); //get the string typed by user
    $.post('check_username.php', {'userName':userName}, function(data) { //make ajax call to check_username.php
     $("#user-result").html(data); //dump the data received from PHP page
    });
    });
</script>

