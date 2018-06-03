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

            <div class="small-12 medium-8 large-8 columns">
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $portfolio  = $fm->validation($_POST['portfolio']);
        $portfolio  =  mysqli_real_escape_string($db->link,$portfolio);

         if($portfolio == ""){
                  echo "<span class='error'>Field must not be empty !</span>";
          }else{
            $query = "UPDATE tb_titleandlogo SET portfolio = '$portfolio' WHERE id = '1'";
            $updated_rows = $db->update($query);
              if ($updated_rows) {
                  echo "<span class='success'>Data Updated Successfully.</span>";
              }else {
                  echo "<span class='error'>Data Not Updated !</span>";
              }
           }
   }
?>
              <form action="" method="post">   
    <?php
        $query = "SELECT * FROM `tb_titleandlogo` WHERE id=1";
        $blog_title = $db->select($query);
        if($blog_title){
           $result = $blog_title->fetch_assoc(); 

    ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Portfolio</label>
                  <textarea rows="10" name="portfolio"><?php echo $result['portfolio']; ?></textarea>
                </div>
    <?php } ?>
                <br/><br/>    
                <button type="submit" class=" button">Update</button>
              </form>
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
