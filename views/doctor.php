	  <div class="small-12 medium-8 large-8 columns">

<?php 
	if(isset($_GET['service']) AND isset($_GET['area'])){ /*service and area */
		echo $service = $_GET['service']; 
		echo $area = $_GET['area'];

		if(isset($_GET['subservice'])){
			$subservice = $_GET['subservice']; 
			$query = "SELECT * FROM tb_doctor WHERE status=1 
					AND designationtitle LIKE '%$subservice%' OR 
						designationdetails LIKE '%$subservice%' OR
					  	degree LIKE '%$subservice%' 
    				AND division LIKE '%$area%' OR 
    					district LIKE '%$area%' OR 
    					chamber LIKE '%$area%'  
    				ORDER BY priority DESC";	

		}else{ 
    		$query = "SELECT * FROM tb_doctor WHERE status=1 
					AND designationtitle LIKE '%$service%' OR  
					  	designationdetails LIKE '%$service%' OR
					  	degree LIKE '%$service%'
					  	
    				AND division LIKE '%$area%' OR 
    					district LIKE '%$area%' OR 
    					chamber LIKE '%$area%'  
    				ORDER BY priority DESC";	
		}

	

			$serviceshow = $db->select($query);
		    if($serviceshow){
		        while($result = $serviceshow->fetch_assoc()) {
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


<?php }  }else{ ?>
		<section class="userinfo <?php echo $priority; ?> post" >
				<center><a class="hollow" style="margin:0px auto; padding:20px 0px; display:block; font-size:25px;" href="index.php">No Doctor Included !!<a></center>
		</section><br/><br/>
	
<?php }/*end: end of while*/ ?>

<?php 
	}elseif(isset($_GET['service'])){ /*service only */
			
			$service = $_GET['service'];
			
			if(isset($_GET['subservice'])){
				echo $subservice = $_GET['subservice']; 
				$query = "SELECT * FROM tb_doctor WHERE status=1 
						AND designationtitle LIKE '%$subservice%' OR 
						  	designationdetails LIKE '%$subservice%' OR
					  		degree LIKE '%$subservice%' 
    					ORDER BY priority DESC";	

			}else{ 
    			$query = "SELECT * FROM tb_doctor WHERE status=1 ORDER BY priority DESC";	
			}


			$serviceshow = $db->select($query);
		    if($serviceshow){
		        while($result = $serviceshow->fetch_assoc()) {
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
			} 
		}else{
			echo "No Data Fetch..";
		}
	}else{ /*without service and area */
			header('Location:index.php');
		}
 
?>
		<!--pagination design-->
<div class="pagination alt_page_navigation" role="navigation" aria-label="Pagination" style="margin-top:10px; text-align:center;"></div>
	
	  </div>