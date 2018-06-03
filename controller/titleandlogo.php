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
         
            <h3>Update Site Title & Logo</h3><hr/>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title  = $fm->validation($_POST['title']);
        $title  =  mysqli_real_escape_string($db->link,$title);

      
    $permited  = array('png');
    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_temp = $_FILES['logo']['tmp_name'];

    $div            = explode('.', $file_name);
    $file_ext       = strtolower(end($div));
    $same_image     = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../logo/".$same_image;
    
   if($title == ""){
            echo "<span class='error'>Field must not be empty !</span>";
    }

    if(!empty($file_name)){
        if ($file_size >1048567) {
            echo "<span class='error'>Image Size should be less then 1MB!</span>";

        }elseif(in_array($file_ext, $permited) === false){
            echo "<span class='error'>You can upload only:-".implode(',',$permited)."</span>";

        }else{
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tb_titleandlogo
                    SET 
                    title  = '$title',
                    logo   = '$same_image'
                  WHERE id ='1'";      

             $updated_rows = $db->update($query);

        if ($updated_rows) {
            echo "<span class='success'>Data Updated Successfully with image.</span>";
            unlink("../logo/".$_POST['del_img']);  
   
        }else {
            echo "<span class='error'>Data Not Updated !</span>";            
        }     
    }
}else{
    $query = "UPDATE tb_titleandlogo
                SET 
                title    = '$title'
                WHERE id = '1'";

        $updated_rows = $db->update($query);

        if ($updated_rows) {
            echo "<span class='success'>Data Updated Successfully.</span>";
        }else {
            echo "<span class='error'>Data Not Updated !</span>";
        }
     }
   }
?>
    <?php
        $query = "SELECT * FROM `tb_titleandlogo` WHERE id=1";
        $blog_title = $db->select($query);
        if($blog_title){
           $result = $blog_title->fetch_assoc(); 

    ?>
            <div class="small-12 medium-2 large-2 columns">
                <!-- SPACING: FORM LEFT SPACING..--><p style="color:white;">site Title & Logo</p>
            </div>  

            <div class="small-12 medium-4 large-4 columns">
              <form action="" method="post" enctype="multipart/form-data">  
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $result['title']; ?>" >
                  <input type="text" value="<?php echo $result['logo']; ?>" name="del_img">
                </div>
                <div class="form-group">                  
                  <img src="../logo/<?php echo $result['logo']; ?>" alt="no-logo-image" style="border:1px solid black; margin:10px 0px;"/>
                </div>
                <div class="form-group">
                    <label for="exampleFileUpload" class="button hollow">Change Logo</label>
                    <input type="file" id="exampleFileUpload" class="show-for-sr" name="logo">
                </div>
                <br/><br/>    
                <button type="submit" class=" button">Update</button>

              </form>
            </div>



    <?php } ?>
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
