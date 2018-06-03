<!-- organization -->

	  <div class="small-12 medium-8 large-8 columns">

<?php /*query block*/
	if(isset($_GET['service']) AND isset($_GET['area'])){ /*service & area*/
		$service = $_GET['service']; /*useless variable*/
		$area = $_GET['area'];

		$query = "SELECT * FROM tb_donars WHERE status=1 AND division LIKE '%$area%' OR district LIKE '%$area%' OR address LIKE '%$area%' ORDER BY id desc";

		$serviceshow = $db->select($query);	
		if($serviceshow){
		    while($result = $serviceshow->fetch_assoc()) {
		?>
		<section class="userinfo <?php echo $priority; ?> post">
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="donars/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage"/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><b>Division:</b> <?php echo $result['division']; ?> <b>District: </b><?php echo $result['district']; ?></p>
					<p class="designation"><b>Address: </b><?php echo $result['address']; ?></p>
					<p class="description"><b>Helpline: </b><?php echo $result['contact']; ?></p>
				</div>
			</div>
		</section>	

		<?php 
		    }
		}


	}elseif(isset($_GET['service'])){ /*only service*/
		$service = $_GET['service']; /*useless variable*/

		$query = "SELECT * FROM tb_donars WHERE status=1 ORDER BY id desc";	
    				
		$serviceshow = $db->select($query);	
		if($serviceshow){
		    while($result = $serviceshow->fetch_assoc()) {

?>
		<section class="userinfo <?php echo $priority; ?> post">
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="donars/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage"/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><b>Division:</b> <?php echo $result['division']; ?> <b>District: </b><?php echo $result['district']; ?></p>
					<p class="designation"><b>Address: </b><?php echo $result['address']; ?></p>
					<p class="description"><b>Helpline: </b><?php echo $result['contact']; ?></p>
				</div>
			</div>
		</section>	
<?php 
		    }
		}

	}else{
		header('Location:../index.php');
	}

?>



 
		<!--pagination design-->
<div class="pagination alt_page_navigation" role="navigation" aria-label="Pagination" style="margin-top:10px; text-align:center;"></div>
	
	  </div>