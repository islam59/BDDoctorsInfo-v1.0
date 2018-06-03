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
      <div class="off-canvas-content" style="min-height:800px; backgrond:white; padding:10px;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;">Menu</button>  
         
            <h3>Sponsor Role</h3><hr/> 

            <table class="hover stack">
              <tbody>
                <tr>
                  <th>SQuare Hospital</th>
                  <th>Panthopath, Dhaka</th>
                  <th>
                    <a class="tiny button" href="#">General</a>
                    <a class="tiny hollow button" href="#">Premium</a>
                    <a class="tiny hollow button" href="#">Silver</a>
                    <a class="tiny hollow button" href="#">Gold</a>
                    <a class="tiny hollow button" href="#">Diamond</a>
                  </th>
                  <th>
                    <a class="tiny warning button" href="#">Update</a>
                    <a class="tiny alert button" href="#">Delete</a>
                  </th>
                </tr>
                <tr>
                  <th>Beximco Pharma</th>
                  <th>Panthopath, Dhaka</th>
                  <th>
                    <a class="tiny hollow button" href="#">General</a>
                    <a class="tiny hollow button" href="#">Premium</a>
                    <a class="tiny hollow button" href="#">Silver</a>
                    <a class="tiny hollow button" href="#">Gold</a>
                    <a class="tiny button" href="#">Diamond</a>
                  </th>
                  <th>
                    <a class="tiny warning button" href="#">Update</a>
                    <a class="tiny alert button" href="#">Delete</a>
                  </th>
                </tr>
                <tr>
                  <th>SQuare Hospital</th>
                  <th>Panthopath, Dhaka</th>
                  <th>
                    <a class="tiny button" href="#">General</a>
                    <a class="tiny hollow button" href="#">Premium</a>
                    <a class="tiny hollow button" href="#">Silver</a>
                    <a class="tiny hollow button" href="#">Gold</a>
                    <a class="tiny hollow button" href="#">Diamond</a>
                  </th>
                  <th>
                    <a class="tiny warning button" href="#">Update</a>
                    <a class="tiny alert button" href="#">Delete</a>
                  </th>
                </tr>
                <tr>
                  <th>SQuare Hospital</th>
                  <th>Panthopath, Dhaka</th>
                  <th>
                    <a class="tiny button" href="#">General</a>
                    <a class="tiny hollow button" href="#">Premium</a>
                    <a class="tiny hollow button" href="#">Silver</a>
                    <a class="tiny hollow button" href="#">Gold</a>
                    <a class="tiny hollow button" href="#">Diamond</a>
                  </th>
                  <th>
                    <a class="tiny warning button" href="#">Update</a>
                    <a class="tiny alert button" href="#">Delete</a>
                  </th>
                </tr>

              </tbody>
            </table>


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
