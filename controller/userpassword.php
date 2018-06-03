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
         
            <h3>Password Settings
              <small><a href="" class="button tiny warning" style="float:right;">Refresh</a></small>
            </h3><hr/>

<?php /*profile update php */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

         $newpassword =  mysqli_real_escape_string($db->link,$_POST['newpassword']);
         $confirmpassword =  mysqli_real_escape_string($db->link,$_POST['confirmpassword']);
         $password =  mysqli_real_escape_string($db->link,$_POST['password']);
         

         if(empty($newpassword)|| empty($confirmpassword)||empty($password)){
              echo "<span style='color:red;'>Field Must Not Empty !</span>";
         }else{
             if($newpassword != $confirmpassword){
                  echo "<span style='color:red;'>Password Not Match !</span>";
             }else{
                $userid = $_SESSION['userid'];
                $passwordold = $fm->validation(md5($_POST['password']));
                $newpassword = $fm->validation(md5($_POST['newpassword'])); 

                $query = "SELECT * FROM tb_user WHERE id='$userid' AND password = '$passwordold'";
                $getuser = $db->select($query);

                if($getuser){
                    $result = $getuser->fetch_assoc();
                    $result['password'];
                    $query = "UPDATE tb_user SET password = '$newpassword' WHERE id = '$userid' AND password = '$passwordold'";
                    $update = $db->update($query);
                    if($update){
                      echo "<span style='color:green;'>Password Changed Successfully !</span>";
                    }
                }else{
                  echo "<span style='color:red;'>Password Not Match !</span>";
                }
             }
         }
     }
?>
              <form style="width:80%; margin:0px auto;" action="" method="post">                

                <div class="form-group">
                  <label for="newpassword">New Password</label>
                  <input type="password" class="form-control" id="newpassword" placeholder="At Least 6 Character" name="newpassword" required>
                </div>
                <div class="form-group">
                  <label for="confirmpassword">Confirm New Password</label>
                  <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm New password" name="confirmpassword" required>
                </div>
                <div class="form-group">
                  <label for="password">Old Password</label>
                  <input type="password" class="form-control" id="password" Placeholder="Old Password " name="password" required>
                </div>

                <button type="submit" class=" button">Change Password</button>
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
