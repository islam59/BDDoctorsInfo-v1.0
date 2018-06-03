<!--  all services list section  -->
<section class="menusection">
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns mainmenu">
			<div class="mainmenurightitem">
				<div class="itemofmenu">
						
					<h4>Services</h4><hr/>
<?php /*TOP SERVICE: show php code */
    $query = "SELECT * FROM tb_service WHERE display=1";
    $service = $db->select($query);
    if($service){
        while($result = $service->fetch_assoc()) {
?>	
					<div class="small-6 medium-3 large-3 columns">
						<div class="services-item">
							<a href="page.php?service=<?php echo $result['servicetitle']; ?>"><img src="logo/<?php echo $result['logo']; ?>" alt="no-image" class="menulogo" /><br/><?php echo $result['servicetitle']; ?></a>
						</div>
					</div>		
<?php } } ?>
				</div>
			</div>
	    </div>
	</div>
</section><hr/>