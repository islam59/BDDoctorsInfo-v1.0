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
        if($_GET['action']=='role'){ /*check role for action*/
              
              $role = $_GET['role']; 
              $query = "UPDATE `tb_user` SET `userrole` = '$role' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:userlist.php');
              }

        }elseif($_GET['action']=='access'){/* check access permition*/
              $role = $_GET['access']; 
              $query = "UPDATE `tb_user` SET `useraccess` = '$role' WHERE `id` = '$id'";
              $updated_rows = $db->update($query);
              if($updated_rows){
                header('Location:userlist.php');
              }
        }elseif($_GET['action']=='delete'){/* delete module */
              $query ="DELETE FROM `tb_user` WHERE `id` = '$id'"; 
              $delete_rows = $db->delete($query);
              if($delete_rows){
                header('Location:userlist.php'); 
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
         
            <h3>User Role Settings</h3><hr/> 

            <table class="hover stack">
              <tbody>

<?php /*profile php code */

  if($_SESSION['userRole']=='Admin'){
        $query = "SELECT * FROM tb_user WHERE userrole!='Admin'";
  }elseif($_SESSION['userRole']=='Director'){
        $query = "SELECT * FROM tb_user WHERE userrole!='Admin' AND userrole!='Director'";
  }
    $getuser = $db->select($query);
    if($getuser){
        $i=1; 
        while($result = $getuser->fetch_assoc()) {
?>
                <tr>
                  <th><?php echo $i; ?></th>
                  <th><?php echo $result['username']; ?></th>
                  <th><?php 
			     $author = $result['username'];
			    $query = "SELECT * FROM tb_doctor WHERE created_by ='$author'";
			    $msg  = $db->select($query);
			    if($msg){
			        $count = mysqli_num_rows($msg);
			        if($count!=0){
			        	$count; 
			        }else{
			        	$count=0; 
			        }
			    }else{
			    	$count = 0;
			    }
			    echo $count; 
                   ?></th>
                  <th>
<?php   if($result['userrole'] == 'Director'){ ?>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=role&role=Director">Director</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Manager">Manager</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Moderator">Moderator</a>
                    &nbsp &nbsp

<?php }elseif($result['userrole'] == 'Manager'){ ?>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Director">Director</a>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=role&role=Manager">Manager</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Moderator">Moderator</a>
                    &nbsp &nbsp
<?php   }else{ ?>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Director">Director</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=role&role=Manager">Manager</a>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=role&role=Moderator">Moderator</a>
                    &nbsp &nbsp
<?php  } ?>

<?php if($result['useraccess'] == '1' ){ ?>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=access&access=1">Promoted</a>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=access&access=0">Suspend</a>
<?php }else{ ?>
                    <a class="tiny hollow button" href="?id=<?php echo $result['id']; ?>&action=access&access=1">Promoted</a>
                    <a class="tiny button" href="?id=<?php echo $result['id']; ?>&action=access&access=1">Suspend</a>
<?php } ?>
                     &nbsp &nbsp
                    <a class="tiny alert button" href="?id=<?php echo $result['id']; ?>&action=delete">Delete</a>

                  </th>
                </tr>
<?php 
      $i++;
    }
  }
?>

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
