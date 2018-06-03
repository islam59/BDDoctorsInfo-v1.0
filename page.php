<!--INCLUDE: Header: -->
<?php include 'inc/header.php'; ?>
  
 
<!--------------top section ----------------- -->
<?php include 'inc/banner.php'; ?>
	
<!--Statistics: statistics with add-->
<?php include 'inc/statistics.php'; ?>

<!--Menu: Top Menu -->
<?php include 'views/pagetopmenu.php'; ?>



<!--data add section -->

<section class="databodysection">
	<div class="row" style="border-top:3px solid black; padding:10px 0px; ">
		
<!--Menu: Left menu search, social and add -->
<?php include 'views/pagesearch.php'; ?>


<!-- Form: form included -->
<?php include 'inc/form.php'; ?>

<!-- SERVICE: service data  included -->
<?php 
	if(isset($_GET['service']) AND isset($_GET['area'])){

		if($_GET['service']=='Doctor'){
			$service = $_GET['service'];
			$area = $_GET['area'];
			include 'views/doctor.php'; 

		}elseif($_GET['service']=='Blood Donars'){ /*blood donars*/
			$service = $_GET['service'];
			$area = $_GET['area'];
			include 'views/donars.php';

		}else{
			$service = $_GET['service'];
			$area = $_GET['area'];
			include 'views/organization.php';
			
		}/* End: service and area */

	}elseif(isset($_GET['service'])){
		if($_GET['service']=='Doctor'){

			$service = $_GET['service'];
			include 'views/doctor.php';

		}elseif($_GET['service']=='Blood Donars'){
			$service = $_GET['service'];
			include 'views/donars.php';

		}else{
			$service = $_GET['service'];
			include 'views/organization.php';

		}

	}elseif(isset($_GET['area'])){
			$service = $_GET['area'];
		
		/*END: ONLY FOR AREA*/
	}else{
		echo '5 to 10 item from all';
	}
?>
	  

<!--MENU: Right Add Block-->		
<?php include 'views/pagerightmenu.php'; ?>
	  
	  <hr/>
	</div>
</section>
	
	
<!--Portfolio: portfolio Included -->
<?php include 'inc/portfolio.php'; ?>	
	
<!--Footer: Footer Included -->
<?php include 'views/pagefooter.php'; ?>