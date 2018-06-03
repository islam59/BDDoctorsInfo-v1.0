      <div class="off-canvas position-left" id="offCanvas" data-off-canvas style="background:black;">
        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Menu -->
        <ul class="vertical menu" class="leftmenuadmin">
          <li><a href="index.php"><?php echo $_SESSION['username']; ?></a></li>

<?php /*addmin view*/
    if($_SESSION['userRole']=='Admin'){
?>
          <li><hr/></li>
          <li><a href="titleandlogo.php">Title & Logo</a></li>
          <li><a href="bannerimage.php">Banner Image</a></li>
<?php } ?>

<?php /*addmin and director view*/
    if($_SESSION['userRole']=='Admin' OR $_SESSION['userRole']=='Director'){
?>        
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><hr/></li>
          <li><a href="servicerole.php">Service Role</a></li>
          <li><a href="servicecategory.php">Doctors Category</a></li>
          <li><hr/></li>
          <li><a href="districtadd.php">Add District</a></li>
          <li><a href="districlist.php">District List</a></li>
          <li><hr/></li>
<?php } ?>


          <li><a href="adddoctors.php">Add Doctors</a></li>


<?php /*addmin and director view*/
    if($_SESSION['userRole']=='Admin' OR $_SESSION['userRole']=='Director'){
?>
          <li><a href="addblooddonator.php">Add Blood Donator</a></li>
          <li><a href="addorganization.php">Add Organization</a></li>
          <li><hr/></li>
          <li><a href="listofdoctors.php">List of Doctors</a></li>
          <li><a href="listofdonators.php">List of Blood Donator</a></li>
          <li><a href="listoforganization.php">List of Organization</a></li>
          
          <li><hr/></li>
          <li><a href="sponsoradd.php">Add To Sponsor</a></li>
          <li><a href="sponsorlist.php">List of Sponsor</a></li> 
          <li><hr/></li>
          <li><a href="pagecontrol.php"> Page Control</a></li>
          <li><a href="companyinformation.php">Information of Company</a></li>
<?php } ?> 

        </ul>

      </div>