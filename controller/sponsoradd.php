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
         
            <h3>Add Sponsor</h3><hr/> 

              <form style="width:80%; margin:0px auto;">                
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g. BDDoctorsinfo" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g. Director- A. K. M. Ali Abdullah" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact Number</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g. 02 254897, +880 1555 999999" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g. 02 254897, +880 1555 999999" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Website Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g. http://www.company.com" >
                </div>
                <div class="form-group">
                    <label>Add Position
                      <select>
                        <option value="">Select Position</option>
                        <option value="">HOME PAGE- After Left Menu</option>
                        <option value="">HOME PAGE- After Cover</option>
                        <option value="">HOME(ALL) PAGE- After Service Menu</option>
                        <option value="">POST(ALL) PAGE- BANNER</option>
                        <option value="">POST(ALL) PAGE- Left</option>
                        <option value="">POST(ALL) PAGE- Right</option>
                        <option value="">LKE POST</option>
                      </select>
                    </label>
                </div>
                <div class="form-group">
                    <label>Set Priority Type</label>
                      <input id="checkbox1" type="checkbox"><label for="checkbox1">General</label>
                      <input id="checkbox1" type="checkbox"><label for="checkbox1">Premium</label>
                      <input id="checkbox2" type="checkbox"><label for="checkbox2">Silver</label>
                      <input id="checkbox3" type="checkbox"><label for="checkbox3">Gold</label>
                      <input id="checkbox3" type="checkbox"><label for="checkbox3">Diamond</label>
                </div>

                <br/> 
                <button type="submit" class=" button">Save Sponsor</button>
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
