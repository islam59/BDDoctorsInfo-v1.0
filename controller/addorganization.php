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
         
            <h3>Add Organization <span style="text-align:rihgt;"><a class="tiny button warning" href='addorganization.php' style="float:right">Refresh</a></span></h3><hr/> 
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
                $type    = $fm->validation($_POST['type']);   
                $address = $fm->validation($_POST['address']);  
                $contact = $fm->validation($_POST['contact']);

                $division =  mysqli_real_escape_string($db->link,$division);
                $district =  mysqli_real_escape_string($db->link,$district);
                $name =  mysqli_real_escape_string($db->link,$name);
                $type =  mysqli_real_escape_string($db->link,$type);
                $address =  mysqli_real_escape_string($db->link,$address);
                $contact =  mysqli_real_escape_string($db->link,$contact);


                if( empty($division) || empty($district) || empty($name) || empty($type) || empty($address) || empty($contact) ){
                    echo "<span style='color:red;'>Field must not be empty !</span>";
                }else{
                    $check = "SELECT * FROM tb_organization WHERE name = '$name' AND type='$type' AND contact='$contact' limit 1";
                    $dcheck = $db->select($check);
                    if($dcheck !=false){
                        echo "<span style='color:red;'>Already Exist !</span>";
                    }else{
                          if($type == 'Ambulance Service'){
                              $picture = 'ambulance.png'; 
                          }elseif($type == 'Pharmacy'){
                              $picture = 'pharmacy.png'; 
                          }elseif($type == 'Hospital'){
                              $picture = 'hospital.png';
                          }elseif($type == 'Clinic'){
                              $picture = 'clinic.png';
                          }elseif($type == 'Community Clinic'){
                              $picture = 'cclinic.png';
                          }else{
                              $picture = 'diagnostic.png'; 
                          }
                        $query = "INSERT INTO tb_organization(division,district,name,type,address,contact,picture,priority,status) VALUES('$division','$district','$name','$type','$address','$contact','$picture',1,1)";                      
                        $catinsert = $db->insert($query);
                        if($catinsert){
                            echo "<span style='color:green;'>Save Successfully. !</span><br/>";                            
                        }else{
                            echo "<span style='color:red;'>Not Saved Successfully. !</span>";
                        }
                    }               
                }
            }
?>


              <form style="width:80%; margin:0px auto;" action="addorganization.php?div=<?php echo $div; ?>" method="post"> 

                <div class="form-group">
                    <label>Division: &nbsp &nbsp


                <?php /*SERVICE: show php code */
                    $query = "SELECT * FROM tb_division WHERE display=1";
                    $service = $db->select($query);
                    if($service){
                        while($result = $service->fetch_assoc()) {
                          if($div==$result['title']){
                ?>
                            <a href="addorganization.php?div=<?php echo $result['title']; ?>" class=" hollow button"><?php echo $result['title']; ?></a> &nbsp

                <?php  }else{ ?>
                            <a href="addorganization.php?div=<?php echo $result['title']; ?>" class=" button"><?php echo $result['title']; ?></a> &nbsp      
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
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter District Name" name="name" required>
                </div>

                <div class="form-group">
                    <label>Organization Type
                      <select name="type" required>
                        <option >Select organization type</option>
                        <option value="Ambulance Service">Ambulance Service</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Clinic">Clinic</option>
                        <option value="Community Clinic">Community Clinic</option>
                        <option value="Diagnostic Center">Diagnostic Center</option>
                      </select>
                    </label>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea rows="4" name="address" required></textarea>
                </div>

                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" class="form-control" id="contact" placeholder="Example- +880 1555 999999 " name="contact" required>
                </div>


                <br/><br/>    
                <button type="submit" class=" button">Save Organization</button>
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
