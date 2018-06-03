
	  <div class="small-12 medium-8 large-8 columns">

<?php
    if(isset($_GET['find'])){
    	$find = $_GET['find'];
    	if($find == 'Doctor'){
    		$query = "SELECT * FROM tb_doctor WHERE status=1 ORDER BY priority desc";
		    $service = $db->select($query);
		    if($service){
		        while($result = $service->fetch_assoc()) {
		        	if($result['priority']=='5'){
						$priority = 'diamond';
		        	}elseif($result['priority']=='4'){
						$priority = 'gold';
		        	}elseif($result['priority']=='3'){
						$priority = 'silver';
		        	}elseif($result['priority']=='2'){
		        		$priority = 'premium';
		        	}elseif($result['priority']=='1'){
						$priority = 'user';
		        	}
?>
		<section class="userinfo <?php echo $priority; ?> post" >
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="doctors/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage" style="width:100%; "/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><?php echo $result['degree']; ?></p>
					<p class="designation"><b><?php echo $result['designationtitle']; ?></b><br/><?php echo $result['designationdetails']; ?></p>
					<p class="description"><b>Chamber: </b><?php echo $result['chamber']; ?></p>					
				</div>
			</div>
		</section>
<?php 
			    }/*end: end of while*/
			}
    	}elseif($find == 'Blood Donars'){ 
    		$query = "SELECT * FROM tb_donars WHERE status=1 ORDER BY id desc";
		    $service = $db->select($query);
		    if($service){
		        while($result = $service->fetch_assoc()) {
?>
		<section class="userinfo <?php echo $priority; ?> post" >
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="donars/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage" style="width:100%; "/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><?php echo $result['bloodgroup']; ?></p>
					<p class="designation"><b>Division: </b><?php echo $result['division']; ?> <b>District:</b> <?php echo $result['district']; ?></p>
					<p class="description"><b>Address: </b>
						<?php 
							if($result['address']==''){
								echo "N/A";
							}else{
								echo $result['address'];		
							}
					 	?>
					</p>					
					<p class="description"><b>Contact Number: </b><?php echo $result['contact']; ?></p>					
				</div>
			</div>
		</section>
<?php 
			    }/*end: end of while*/
			}
    	}else{ /*Organization */
    		$query = "SELECT * FROM tb_organization WHERE status=1 AND type LIKE '%$find%' ORDER BY priority desc";
		    $service = $db->select($query);
		    if($service){
		        while($result = $service->fetch_assoc()) {
		        	if($result['priority']=='5'){
						$priority = 'diamond';
		        	}elseif($result['priority']=='4'){
						$priority = 'gold';
		        	}elseif($result['priority']=='3'){
						$priority = 'silver';
		        	}elseif($result['priority']=='2'){
		        		$priority = 'premium';
		        	}elseif($result['priority']=='1'){
						$priority = 'user';
		        	}
?>
		<section class="userinfo <?php echo $priority; ?> post">
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="organization/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage"/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><b>Division:</b> <?php echo $result['division']; ?> <b>District: </b><?php echo $result['district']; ?></p>
					<p class="designation"><b>Address: </b><?php echo $result['address']; ?></p>
					<p class="description"><b>Helpline: </b><?php echo $result['contact']; ?></p>
				</div>
			</div>
		</section>	
<?php 
			    }/*end: end of while*/
			}
    	}


    }elseif(isset($_GET['area'])){ /*end of isset find*/
    	$find = $_GET['area'];
    	$query = "SELECT * FROM tb_doctor WHERE status=1 AND division LIKE '%$find%' OR district LIKE '%$find%' OR chamber LIKE '%$find%' ORDER BY priority desc";
		$service = $db->select($query);
		    if($service){
		        while($result = $service->fetch_assoc()) {
		        	if($result['priority']=='5'){
						$priority = 'diamond';
		        	}elseif($result['priority']=='4'){
						$priority = 'gold';
		        	}elseif($result['priority']=='3'){
						$priority = 'silver';
		        	}elseif($result['priority']=='2'){
		        		$priority = 'premium';
		        	}elseif($result['priority']=='1'){
						$priority = 'user';
		        	}
?>
		<section class="userinfo <?php echo $priority; ?> post" >
			<div class="row">
				<div class="small-12 medium-4 large-4 columns"><img src="doctors/<?php echo $result['picture']; ?>" alt="no-doctors-image" class="userimage" style="width:100%; "/></div>
				<div class="small-12 medium-8 large-8 columns">
					<h4 class="name"><?php echo $result['name']; ?></h4>
					<p class="degree"><?php echo $result['degree']; ?></p>
					<p class="designation"><b><?php echo $result['designationtitle']; ?></b><br/><?php echo $result['designationdetails']; ?></p>
					<p class="description"><b>Chamber: </b><?php echo $result['chamber']; ?></p>					
				</div>
			</div>
		</section>
<?php 
			    }/*end: end of while*/
			}

    }else{/*END: END OF ISSET area*/
    	Header('Location:index.php');
    }
?>

	


<!--pagination design-->
		<div class="pagination alt_page_navigation" role="navigation" aria-label="Pagination" style="margin-top:10px; text-align:center;"></div>
	
	  </div>	