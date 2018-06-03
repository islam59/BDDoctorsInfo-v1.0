<?php ob_start(); ?>
<!--Banner: Included -->
<?php include 'inc/header.php'; ?>

<!--Banner: Included -->
<?php include 'inc/banner.php'; ?>

<!-- Menu: Top Menu included -->
<?php include 'inc/topmenu.php'; ?>


<section class="contentbody">
  <div class="row">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>  
      
      <!-- SideBar: sidebar included-->
      <?php include 'inc/sidebar.php'; ?>

      <!-- Content: Page Content included-->
      <div class="off-canvas-content" style="min-height:900px; backgrond:white; padding:10px;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;"><?php echo $_SESSION['userRole']; ?></button>  
         
            <h3>ADD USER
              <small><a href="" class="button tiny warning" style="float:right;">Refresh</a></small>
            </h3><hr/>
            
<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $username = $fm->validation($_POST['username']);
                $email    = $fm->validation($_POST['email']);   
                $contactnumber    = $fm->validation($_POST['contactnumber']);   
                $password = $fm->validation(md5($_POST['password']));
                $address    = $fm->validation($_POST['address']);   
                $role = $fm->validation($_POST['role']);

                $username =  mysqli_real_escape_string($db->link,$username);
                $email =  mysqli_real_escape_string($db->link,$email);
                $contactnumber =  mysqli_real_escape_string($db->link,$contactnumber);
                $password =  mysqli_real_escape_string($db->link,$password);
                $address =  mysqli_real_escape_string($db->link,$address);
                $role =  mysqli_real_escape_string($db->link,$role);

                if(empty($username)||empty($email)||empty($contactnumber) ||empty($address) || empty($password)||empty($role)){
                    echo "<span style='color:red;'>Field must not be empty !</span>";
                }else{
                    $mailquery = "SELECT * FROM tb_user WHERE email = '$email' limit 1";
                    $mailcheck = $db->select($mailquery);
                    if($mailcheck !=false){
                        echo "<span style='color:red;'>Email Already Exist !</span>";
                    }else{
                        $query = "INSERT INTO tb_user(username,email,phonenumber,password,address,userrole) VALUES('$username','$email','$contactnumber','$password','$address','$role')";
                        $catinsert = $db->insert($query);
                        if($catinsert){
                            echo "<span style='color:green;'>User Created Successfully. !</span><br/>";
                            echo "<span style='color:teal;'>User ID: ".$email."</span><br/>";
                            echo "<span style='color:teal;'>User Password: ".$_POST['password']."</span>";
                        }else{
                            echo "<span style='color:red;'>User Not Created. !</span>";
                        }
                    }               
                }
            }
?>
              <form style="width:80%; margin:0px auto;" action="" method="post">                
                <div class="form-group">
                  <label for="username">USER Name</label>
                  <input type="text" class="form-control" id="username" placeholder="e.g. Mr. Joen Doe" name="username" >
                </div>
                <div class="form-group">
                  <label for="email">USER Email</label>
                  <input type="text" class="form-control" id="email" placeholder="e.g. example@email.com" name="email" >
                </div>
                <div class="form-group">
                  <label for="contactnumber">Contact Number</label>
                  <input type="text" class="form-control" id="contactnumber" placeholder="e.g. 02 254897, +880 1555 999999" name="contactnumber">
                </div>
                <div class="form-group">
                  <label for="address">USER Address</label>
                  <textarea rows="4" id="address" name="address"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Default Password</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="password" value="<?php echo $rand = substr(md5(microtime()),rand(0,26),5); ?>" readonly>
                </div>
                <div class="form-group">
                    <label>USER Role</label>                    
                    <input type="radio" name="role" value="Director" id="Director"><label for="Director">Director</label>
                    <input type="radio" name="role" value="Manager" id="Manager"><label for="Manager">Manager</label>
                    <input type="radio" name="role" value="Moderator" id="Moderator"><label for="Moderator">Moderator</label>                    
                </div>

                <br/> 
                <button type="submit" class=" button">Save User</button>
              </form>


      </div>

    </div>
  </div>
</div>
</section>

      <!-- Content: Page Content included-->
      <?php include 'inc/footer.php'; ?>



</div>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
    <script>
       //$("#modalContainer").load("_form-modal-test.html", function() {
        $(document).foundation();
         //});
    </script> 

  </body>
</html>
