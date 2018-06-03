<div class="small-12 medium-8 large-9 columns mainmenuright">
	<div class="mainmenurightitem">
		<div class="portfolio">
<?php /*BANNER: show php code */
    $query = "SELECT * FROM tb_titleandlogo WHERE id=1";
    $service = $db->select($query);
    if($service){
        $result = $service->fetch_assoc();
?>
			<h3><img src="logo/<?php echo $result['banner']; ?>" alt="no-image" class="portfoliologo" /></h3>
<?php } ?>
		</div>
		<div class="itemofmenu">
			<h4>Top Services</h4><hr/>
<?php /*TOP SERVICE: show php code */
    $query = "SELECT * FROM tb_service WHERE position = 'top' AND display=1";
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
	<!-- ---------------- add can be added ------------------------------------------------------------------ -->					
</div>