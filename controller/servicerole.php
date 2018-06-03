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
<?php
  if(isset($_GET['id'])){ /*set the get method*/
        $id = $_GET['id'];
        if($_GET['action']=='position'){ /*check role for action*/
              
              $position = $_GET['position']; 
              $query = "UPDATE `tb_service` SET `position` = '$position' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:servicerole.php');
              }

        }elseif($_GET['action']=='display'){/* check access permition*/
              $display = $_GET['display'];
              if($display==1){
                $display = 0; 
              }else{
                $display = 1; 
              }
              $query = "UPDATE `tb_service` SET `display` = '$display' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:servicerole.php');
              }
        }
     }
?>
            <h3>SERVICE SETTINGS
              <small><a href="" class="button tiny warning" style="float:right;">Refresh</a></small>
            </h3><hr/>

            <table class="hover stack">
              <tbody>
<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_service";
    $service = $db->select($query);
    if($service){
        $i=1; 
        while($result = $service->fetch_assoc()) {
?>
                <tr>
                  <th><?php echo $i; ?></th>
                  <th><?php echo $result['servicetitle']; ?></th>
                  <th><img src="../logo/<?php echo $result['logo']; ?>" alt="no-logo-image" style="width:50px;"/></th>
                  <th>
                  <?php if($result['position'] == 'top'){  ?>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=position&position=top">Topper</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=position&position=bottom">Bottom</a>

                    <?php }else{ ?>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=position&position=top">Topper</a>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=position&position=bottom">Bottom</a>
                  <?php } ?>
&nbsp &nbsp 
                  <?php if($result['display'] == '1'){  ?>
                    <a class="tiny success button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                  <?php }else{ ?>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Show</a>
                    <a class="tiny success  button" href="?id=<?php echo $result['id']; ?>&action=display&display=<?php echo $result['display']; ?>">Hide</a>
                  <?php } ?>
                  </th>
                </tr> 
<?php   $i++; } } ?>

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
