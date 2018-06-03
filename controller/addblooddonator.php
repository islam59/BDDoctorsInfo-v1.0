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
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;">Menu</button>  
         
            <h3>Add Blood Donars</h3><hr/> 
<?php 
    if(isset($_GET['div'])){
      $div = $_GET['div'];
    }else{
      $div = 'Dhaka'; 
    }

?>

<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $division = $fm->validation($_POST['division']);
                $district = $fm->validation($_POST['district']);
                $name    = $fm->validation($_POST['name']);   
                $bloodgroup    = $fm->validation($_POST['bloodgroup']);  
                $contact = $fm->validation($_POST['contact']); 
                $address    = $fm->validation($_POST['address']);  
                $gender = $fm->validation($_POST['gender']);

                $division =  mysqli_real_escape_string($db->link,$division);
                $district =  mysqli_real_escape_string($db->link,$district);
                $name =  mysqli_real_escape_string($db->link,$name);
                $bloodgroup =  mysqli_real_escape_string($db->link,$bloodgroup);
                $contact =  mysqli_real_escape_string($db->link,$contact);
                $address =  mysqli_real_escape_string($db->link,$address);
                $gender =  mysqli_real_escape_string($db->link,$gender);

                if(empty($division)||empty($district)||empty($name) ||empty($bloodgroup) || empty($contact)||empty($address)|| empty($gender)){
                    echo "<span style='color:red;'>Field must not be empty !</span>";
                }else{
                    $check = "SELECT * FROM tb_donars WHERE name = '$name' AND contact='$contact' AND bloodgroup='$bloodgroup' limit 1";
                    $dcheck = $db->select($check);
                    if($dcheck !=false){
                        echo "<span style='color:red;'>Already Exist !</span>";
                    }else{
                        if($gender='Male'){
                          $pic = 'male.png';
                        }else{
                          $pic = 'female.png';
                        }
                        $query = "INSERT INTO tb_donars(name,bloodgroup,division,district,contact,address,picture,gender,status)VALUES('$name','$bloodgroup','$division','$district','$contact','$address','$pic','$gender',1)";                      
                        $catinsert = $db->insert($query);
                        if($catinsert){
                            echo "<span style='color:green;'>Save Successfully. !</span><br/>";                            
                        }else{
                            echo "<span style='color:red;'>User Not Created. !</span>";
                        }
                    }               
                }
            }
?>


              <form style="width:80%; margin:0px auto;" action="?div=<?php echo $div; ?>" method="post"> 

                <div class="form-group">
                    <label>Division: &nbsp &nbsp

                <?php /*SERVICE: show php code */
                    $query = "SELECT * FROM tb_division WHERE display=1";
                    $service = $db->select($query);
                    if($service){
                        while($result = $service->fetch_assoc()) {
                          if($div==$result['title']){
                ?>
                            <a href="addblooddonator.php?div=<?php echo $result['title']; ?>" class=" hollow button"><?php echo $result['title']; ?></a> &nbsp

                <?php  }else{ ?>
                            <a href="addblooddonator.php?div=<?php echo $result['title']; ?>" class=" button"><?php echo $result['title']; ?></a> &nbsp      
                <?php  } ?>
                        
                <?php } } ?>


                    </label>
                </div>

                <input type="hidden" class="form-control" value="<?php echo $div; ?>" name="division">

                <div class="form-group">
                    <label>Select District
                      <select name="district" required>
                        <option value="">Select Division First</option>
                <?php /*SERVICE: show php code */
                    $query = "SELECT * FROM tb_district WHERE division='$div' AND display=1";
                    $service = $db->select($query);
                    if($service){
                        while($result = $service->fetch_assoc()) {
                          if($div == $result['division']){
                ?>
                        <option value="<?php echo $result['district']; ?>"><?php echo $result['district']; ?></option>
                <?php } } } ?>

                      </select>
                    </label>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter District Name" name="name" required>
                </div>
                <div class="form-group">
                    <label>Blood Group
                      <select name="bloodgroup">
                        <option value="">Select Blood Group</option>
                        <option value="A+ (ve)">A+ (ve)</option>
                        <option value="B+ (ve)">B+ (ve)</option>
                        <option value="AB+ (ve)">AB+ (ve)</option>
                        <option value="O+ (ve)">O+ (ve)</option>
                        <option value="A- (ve)">A- (ve)</option>
                        <option value="B- (ve)">B- (ve)</option>
                        <option value="AB- (ve)">AB- (ve)</option>
                        <option value="O- (ve)">O- (ve)</option>
                      </select>
                    </label>
                </div>

                <div class="form-group">
                  <label for="Contact">Contact</label>
                  <input type="text" class="form-control" id="Contact" placeholder="Enter District Name" name="contact" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">address</label>
                  <textarea rows="4" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label>Gender &nbsp &nbsp &nbsp                   
                    <input type="radio" name="gender" value="Male" id="Director" required><label for="Director">Male</label>
                    <input type="radio" name="gender" value="Female" id="Manager" required><label for="Manager">Female</label>                  
                </div>

                <br/><br/>    
                <button type="submit" class=" button">Save Doctor</button>
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
