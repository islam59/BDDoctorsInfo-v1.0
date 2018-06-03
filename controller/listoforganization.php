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
         
            <h3>LIST OF ORGANIZATION
              <small>
              <a href="" class="button tiny warning" style="float:right;">Refresh</a>
              <form class="tiny">
                    <input type="text" id="right-label" placeholder="Enter Search keyword">
              </form>
            </small>
            </h3> 

            <hr/> 

<?php 
    if(isset($_GET['id'])){
      
      $id = $_GET['id'];

      if($_GET['action']=='priority'){
        $priority = $_GET['priority']; 

              $query = "UPDATE `tb_organization` SET `priority` = '$priority' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:listoforganization.php');
              }
      }elseif($_GET['action']=='delete'){
              $query ="DELETE FROM `tb_organization` WHERE `id` = '$id'"; 
              $delete_rows = $db->delete($query);
              if($delete_rows){
                header('Location:listoforganization.php');
              }
      }else{

      }
    }
?>
            <table class="hover stack" >
              <tbody>

<?php /*SERVICE: show php code */
    $query = "SELECT * FROM `tb_organization`";
    $service = $db->select($query);
    if($service){
      $i=1; 
      while($result = $service->fetch_assoc()) {     

                if($result['priority']==5){ ?>

                    <tr class="userinfo diamond post">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['name']; ?></td>
                      <td><?php echo $result['type']; ?></td>
                      <td><?php echo $result['division']; ?> - <?php echo $result['district']; ?><br/><?php echo $result['address']; ?></td>
                      <td><?php echo $result['contact']; ?></td>
                      <td>
                        <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=5">Diamond</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=4">Gold</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=3">Silver</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=2">Premium</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=1">User</a> 
                        
                        <!--<a class="tiny warning button" href="?id=<?php echo $result['id']; ?>&action=edit">Edit</a>-->
                        <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete" onclick="return confirm('Are you sure to Delete !');">Delete</a>
                      </td>
                    </tr> 

                  <?php }elseif($result['priority']==4){ ?>
                    <tr class="userinfo gold post">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['name']; ?></td>
                      <td><?php echo $result['type']; ?></td>
                      <td><?php echo $result['division']; ?> - <?php echo $result['district']; ?><br/><?php echo $result['address']; ?></td>
                      <td><?php echo $result['contact']; ?></td>
                      <td>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=5">Diamond</a>
                        <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=4">Gold</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=3">Silver</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=2">Premium</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=1">User</a> 
                        
                        <!--<a class="tiny warning button" href="?id=<?php echo $result['id']; ?>&action=edit">Edit</a>-->
                        <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete" onclick="return confirm('Are you sure to Delete !');">Delete</a>
                      </td>
                    </tr> 
                  <?php }elseif($result['priority']==3){ ?>
                    <tr class="userinfo silver post">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['name']; ?></td>
                      <td><?php echo $result['type']; ?></td>
                      <td><?php echo $result['division']; ?> - <?php echo $result['district']; ?><br/><?php echo $result['address']; ?></td>
                      <td><?php echo $result['contact']; ?></td>
                      <td>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=5">Diamond</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=4">Gold</a>
                        <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=3">Silver</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=2">Premium</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=1">User</a> 
                        
                        <!--<a class="tiny warning button" href="?id=<?php echo $result['id']; ?>&action=edit">Edit</a>-->
                        <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete" onclick="return confirm('Are you sure to Delete !');">Delete</a>
                      </td>
                    </tr> 
                  <?php }elseif($result['priority']==2){ ?>
                    <tr class="userinfo premium post">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['name']; ?></td>
                      <td><?php echo $result['type']; ?></td>
                      <td><?php echo $result['division']; ?> - <?php echo $result['district']; ?><br/><?php echo $result['address']; ?></td>
                      <td><?php echo $result['contact']; ?></td>
                      <td>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=5">Diamond</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=4">Gold</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=3">Silver</a>
                        <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=2">Premium</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=1">User</a> 
                        
                        <!--<a class="tiny warning button" href="?id=<?php echo $result['id']; ?>&action=edit">Edit</a>-->
                        <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete" onclick="return confirm('Are you sure to Delete !');">Delete</a>
                      </td>
                    </tr> 
                  <?php }else{?>
                    <tr class="userinfo user post">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['name']; ?></td>
                      <td><?php echo $result['type']; ?></td>
                      <td><?php echo $result['division']; ?> - <?php echo $result['district']; ?><br/><?php echo $result['address']; ?></td>
                      <td><?php echo $result['contact']; ?></td>
                      <td>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=5">Diamond</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=4">Gold</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=3">Silver</a>
                        <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=2">Premium</a>
                        <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=priority&priority=1">User</a> 

                        <!--<a class="tiny warning button" href="?id=<?php echo $result['id']; ?>&action=edit">Edit</a>-->
                        <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete" onclick="return confirm('Are you sure to Delete !');">Delete</a>
                      </td>
                    </tr> 
                  <?php } ?>

<?php $i++; } } ?>





              </tbody>
            </table>
        <div class="pagination alt_page_navigation" role="navigation" aria-label="Pagination" style="margin-top:10px; text-align:center;"></div>


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
