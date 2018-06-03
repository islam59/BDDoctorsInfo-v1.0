<!-- ------------top section ----------------- -->
<section class="topsection">
	<div class="row">
		<div class="small-12 medium-2 large-2 columns logo">

<?php /*LOGO: show php code */
    $query = "SELECT * FROM tb_titleandlogo WHERE id=1";
    $service = $db->select($query);
    if($service){
    	$result = $service->fetch_assoc();
?>
			<a href="http://www.bddoctorsinfo.com"><img src="logo/<?php echo $result['logo']; ?>" alt="no-image" class="logo-image" /></a>
<?php } ?>			
		</div>
		<div class="small-12 medium-8 large-8 columns menu">
			<div class="large-12 small-12">
				<span class="menuitem"><a href="#"></a></span>
				<span class="menuitem"><a href="#"></a></span>
			</div>
		</div>
		<div class="small-12 medium-2 large-2 columns menu"><!-- <a href="#" data-open="modalForm" class="warning tiny button">Login/Signin</a>--> </div>
	</div>
</section>