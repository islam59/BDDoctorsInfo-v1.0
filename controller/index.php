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
      <div class="off-canvas-content" data-off-canvas-content style="min-height:765px; backgrond:white;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;"><?php echo $_SESSION['userRole']; ?></button>  
          <div class="small-12 medium-12 large-12 columns">
                <h3>Dashaboard Description</h3><hr/>
                <br/><br/><br/><br/>
                <center><a class="button large hollow" style="color:red;" href="#">Warning: Data Must Will Case Sensetive!!!</a></center>
                                <br/><br/><br/><br/>
                <center><a class="button large warning" href="adddoctors.php">Add Doctors</a></center>
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
