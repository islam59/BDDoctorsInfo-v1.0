<?php 

	if(isset($_GET['service']) AND isset($_GET['area'])){
		$get = 'service='.$_GET['service'].'&area='.$_GET['area'];

	}elseif(isset($_GET['area'])){
		$get = 'area='.$_GET['area']; 

	}elseif(isset($_GET['service'])){
		$get = 'service='.$_GET['service']; 
	}else{
		
	}
?>

<!--MENU: top menu -->	
<section class="mainmenuright">
	<div class="row">
  	   <div class="small-12 medium-12 large-12 columns">
			<div class="small-12 medium-3 large-3 columns"></div>
				<div class="small-12 medium-9 large-9 columns">
					<div class="menu">
						<ul class="dropdown menu" data-dropdown-menu>
						    <li><a href="index.php" class="tiny secondary button"><img src="logo/home.png" style="width:100%;"/></a></li>
						    <li><a class="secondary button">Location</a>
							    <ul class="menu">

									<li><a href="page.php?<?php echo $get; ?>&area=Dhaka">Dhaka</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Dhaka' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Rajshahi">Rajshahi</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Rajshahi' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Chittagong">Chittagong</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Chittagong' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Sylhet">Sylhet</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Sylhet' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Khulna">Khulna</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Khulna' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Barishal">Barishal</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Barishal' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


									<li><a href="page.php?<?php echo $get; ?>&area=Rangpur">Rangpur</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_district WHERE division='Rangpur' AND  display=1";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?<?php echo $get; ?>&area=<?php echo $result['district']; ?>"><?php echo $result['district']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>


								</ul>
							</li>
							
							<li><a class="secondary button">Services</a>
							    <ul class="menu">
									<li><a href="page.php?<?php echo $get; ?>&service=Doctor">Doctor</a>
										<ul class="menu">
								<?php /*SERVICE: show php code */
								    $query = "SELECT * FROM tb_category";
								    $service = $db->select($query);
								    if($service){
								        while($result = $service->fetch_assoc()) {
								?>
											<li><a href="page.php?&<?php echo $get; ?>&service=Doctor&subservice=<?php echo $result['name']; ?>"><?php echo $result['name']; ?></a></li>
								<?php } } ?>
										</ul>
									</li>
									<li><a href="page.php?<?php echo $get; ?>&service=Ambulance Service">Ambulance Service</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Pharmacy">Pharmacy</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Blood Donars">Blood Donation</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Hospital">Hospital</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Clinc">Clinic</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Community Clinc">Community Clinic</a></li>
									<li><a href="page.php?<?php echo $get; ?>&service=Diagonostic Center">Diagonostic Center</a></li>

								</ul>
							</li>
 
						</ul>
					</div><!--menu end-->
				</div>
		  </div>   
		</div><!--row end-->
	</section>