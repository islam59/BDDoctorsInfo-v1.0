<!-- Header Included !  -->
<?php include 'inc/header.php'; ?>

	<!-- Top: Banner section  -->
	<?php include 'inc/banner.php'; ?>
	 
	<!-- Statistics: Top statistic Menu section -->
	<?php include 'inc/statistics.php'; ?>

	<!-- Company: left Menu & site head section -->
	<section class="menusection">
		<div class="row">
		    <div class="small-12 medium-12 large-12 columns mainmenu">
				<?php include 'inc/leftmenu.php'; ?><!--left menu added with add-->			
				<?php include 'inc/sitehead.php'; ?><!--site Head added with add-->			
			</div>
		</div>
	</section>

	<!-- social section -->
	<?php include 'inc/social.php'; ?>

	<!-- Form: form included -->
	<?php include 'inc/form.php'; ?>

	<!-- Section: all services section -->
	<?php include 'inc/service.php'; ?>

	<!-- Portfolio: bottom portfolio section with add -->
	<?php include 'inc/portfolio.php'; ?>
		
	<!-- Footer: footer section & no add -->
	<?php include 'inc/footer.php'; ?>


	
	
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
