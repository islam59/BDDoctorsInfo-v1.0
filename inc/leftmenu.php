<!-- ------------Left menu section ---------------- -->
<div class="small-12 medium-4 large-3 columns mainmenuleft">
	<div class="mainmenuleftitem">
		<ul class="accordion-item vertical menu" data-accordion-menu>
		    <li>
			<a href="#" style="color:black; text-decoration:none;">Division</a><hr/>
				<ul class="menu vertical">

<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_division WHERE display=1";
    $service = $db->select($query);
    if($service){
        while($result = $service->fetch_assoc()) {
?>
				  <li><a href="page.php?area=<?php echo $result['title']; ?>"><?php echo $result['title']; ?></a></li>
<?php } } ?>
				  <li><a href="#"><hr/></a></li>
				</ul>
			</li>
			<li>
			<a href="#" style="color:black; text-decoration:none;">Services</a><hr/>
				<ul class="menu vertical nested">

<?php /*SERVICE: show php code */
    $query = "SELECT * FROM tb_service WHERE display=1";
    $service = $db->select($query);
    if($service){
        while($result = $service->fetch_assoc()) {
?>
				  <li><a href="page.php?service=<?php echo $result['servicetitle']; ?>"><?php echo $result['servicetitle']; ?></a></li>
<?php } } ?>
				</ul>
			</li>
		</ul>
	</div>	

<!-- ----------------------------------------- big add block ----------------------------------------------------------- -->					
	<!-- <img src="add/2.jpg" alt="rent-for-add" /> this add show after index left menu.. -->

</div><!--end of left menu-->
				