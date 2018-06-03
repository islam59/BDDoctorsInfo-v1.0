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
      <div class="off-canvas-content" data-off-canvas-content style="min-height:765px; backgrond:white; padding:10px;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;">Menu</button>  
         

            <h3>Update Portfolio</h3><hr/>

            <div class="small-12 medium-2 large-2 columns">
                <!-- SPACING: FORM LEFT SPACING..--><p style="color:white;">Site Portfolio</p>
            </div>  
<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $division = $fm->validation($_POST['division']);
                $district    = $fm->validation($_POST['district']);

                $division =  mysqli_real_escape_string($db->link,$division);
                $district =  mysqli_real_escape_string($db->link,$district);

                if(empty($division)||empty($district)){
                    echo "<span style='color:red;'>Field must not be empty !</span>";
                }else{
                    $query = "SELECT * FROM tb_district WHERE division='$division' AND district='$district' limit 1";
                    $check = $db->select($query);
                    if($check !=false){
                        echo "<span style='color:red;'>Already Exist !</span>";
                    }else{
                        $query = "INSERT INTO tb_district(division,district,display) VALUES('$division','$district','0')";
                        $catinsert = $db->insert($query);
                        if($catinsert){                            
                            header('Location:districtadd.php');
                        }else{                            
                            header('Location:districtadd.php');
                        }
                    }               
                }
            }
?>
            <div class="small-12 medium-4 large-4 columns">
              <form method="post" action="districtadd.php">
                <div class="form-group">
                    <label>Select Division
                      <select name="division" required >
                        <option>Select Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Rangpur">Rangpur</option>
                      </select>
                    </label>
                </div>
                <div class="form-group">
                  <label for="district">District Name</label>
                  <input type="text" class="form-control" id="district" placeholder="Enter District Name" name="district" required>
                </div>  
                <button type="submit" class=" button">Save District</button>
              </form>
            </div>
            <div class="small-12 medium-8 large-8 columns" >

            <table class="hover stack" style="margin-top:50px;">
              <tbody>
                <tr style="background:black; color:white;">
                  <th>Dhaka</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Dhaka'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Rajshahi</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Rajshahi'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Chittagong</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Chittagong'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Sylhet</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Sylhet'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Barishal</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Barishal'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Khulna</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Khulna'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
                <tr style="background:black; color:white;">
                  <th>Rangpur</th>
                  <th><?php $query = "SELECT * FROM tb_district WHERE division ='Rangpur'"; $district = $db->select($query); if($district){ $count = mysqli_num_rows($district); echo $count; } ?></th>
                </tr>
              </tbody>
            </table>
            </div>


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
