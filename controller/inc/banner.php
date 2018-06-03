<section class="adminbanner ">
    <div class="row">
        <div class="small-12 medium-9 large-9 columns">
<?php /*LOGO: show php code */
    $query = "SELECT * FROM tb_titleandlogo WHERE id=1";
    $service = $db->select($query);
    if($service){
        $result = $service->fetch_assoc();
?>
            <div class="logo"> <a href="#"><img src='../logo/<?php echo $result['logo']; ?>' alt='no-logo-image' style="width:130px; "></a></div>
<?php } ?>  
        </div>

        <div class="small-12 medium-3 large-3 columns">
            <div class="topmenuadmin">
              <ul class="dropdown menu align-right" data-dropdown-menu >
                <li>
                  <a href="#"><?php echo $_SESSION['username']; ?></a>

                  <ul class="menu profilemenu" >
                    <li><a href="useradd.php">User Profile</a></li>
                    <li><hr/></li>
                    <li><a href="userpassword.php">Change Password</a></li>
<?php /*addmin and director view*/
    if($_SESSION['userRole']=='Admin' OR $_SESSION['userRole']=='Director'){
?>
                    <li><hr/></li>                    
                    <li><a href="userlist.php">User List</a></li>
                    <li><a href="useradd.php">Add User</a></li>
<?php  } ?>
                    <li><hr/></li>
                    <?php  if(isset($_GET['action']) && $_GET['action'] == 'logout'){ Session::destroy();  } ?>
                    <li><a href="?action=logout">Logout</a></li>
                    <li><hr/></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
    </div>
</section>