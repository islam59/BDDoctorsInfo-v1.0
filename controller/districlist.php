<?php ob_start(); ?>
<!--Banner: Included -->
<?php include 'inc/header.php'; ?>

<!--Banner: Included -->
<?php include 'inc/banner.php'; ?>

<!-- Menu: Top Menu included -->
<?php include 'inc/topmenu.php'; ?>

<?php
  if(isset($_GET['id'])){ /*set the get method*/
        $id = $_GET['id'];
        if($_GET['action']=='display'){ /*check role for action*/
              $display = $_GET['display'];
              if($display==1){
                $display = 0; 
              }else{
                $display = 1; 
              }
              $query = "UPDATE `tb_district` SET `display` = '$display' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:districlist.php');
              }

        }
     }
?>


<section class="contentbody">
  <div class="row">
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>  
      
      <!-- SideBar: sidebar included-->
      <?php include 'inc/sidebar.php'; ?>

      <!-- Content: Page Content included-->
      <div class="off-canvas-content" style="min-height:800px; backgrond:white; padding:10px;">
          <button type="button" class="small secondary button" data-toggle="offCanvas" style="background:black;">Menu</button>  
              <h3>District Settings
              <small>
                <a href="" class="button tiny warning" style="float:right;">Refresh</a>
              </small>
                      <div class="pagination alt_page_navigation" role="navigation" aria-label="Pagination" style="margin-top:10px; text-align:center;"></div>
              </h3> 
            <hr/> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Dhaka</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Dhaka'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Khulna</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Khulna'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Chittagong</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Chittagong'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Rajshahi</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Rajshahi'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Sylhet</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Sylhet'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Barishal</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Barishal'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
              </tbody>
            </table> 

            <table class="hover stack">
              <tbody>
                <tr style="font-size:30px; background:gray; ">
                  <th colspan="3">Rangpur</th>
                </tr>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_district WHERE division='Rangpur'";
    $service = $db->select($query);
    if($service){
        $i=01; 
        while($result = $service->fetch_assoc()) {
?>
                <tr class="userinfo post">
                  <th>Dha-<?php echo $i; ?></th>
                  <th><?php echo $result['district']; ?></th>
                  <th>
                    <?php if($result['display']==1){ ?>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php }else{ ?>
                      <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                      <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                    <?php } ?>
                  </th>
                </tr>
<?php $i++; } } ?>
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

    <script src="../js/paginate.js"></script>
    <script src="../js/custom.js"></script>
    
    <script>
       //$("#modalContainer").load("_form-modal-test.html", function() {
        $(document).foundation();
         //});
    </script> 

  </body>
</html>
