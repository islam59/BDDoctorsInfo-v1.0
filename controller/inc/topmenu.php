<section class="contentadmin">
    <div class="row">
      <div class="topmenu">
          <ul class="menu">
            <li class="menu-text"><a href="index.php" class="button hollow alert secondary">Dashboard</a></li>
            <li style="display:none;"><a href="#" class="button small secondary ">Message (2)</a></li>
<?php 
	if($_SESSION['userRole']=='Admin'){
?>
<?php 
/*doctors fetch*/
    $query = "SELECT * FROM tb_doctor WHERE status = '1'";
    $doctor= $db->select($query);
    if($doctor){
        $count = mysqli_num_rows($doctor);
        if($count!=0){
        	$count; 
        }else{
        	$count=0; 
        }
    }

/*donars fetch*/
    $queryb = "SELECT * FROM tb_donars WHERE status = '1'";
    $msgb  = $db->select($queryb);
    if($msgb){
        $donars= mysqli_num_rows($msgb);
        if($donars != 0){
        	$donars; 
        }else{
        	$donars=0; 
        }
    }
    
 /*ambulance fetch*/   
    $queryambulance= "SELECT * FROM tb_organization WHERE type='Ambulance Service'";
    $ambulance= $db->select($queryambulance);
    if($ambulance){
        $ambulance= mysqli_num_rows($ambulance);
        if($ambulance != 0){
        	$ambulance; 
        }else{
	        $ambulance = 0; 
        }
    }

/*hospital fetch*/    
 /*ambulance fetch*/   
    $queryhospital= "SELECT * FROM tb_organization WHERE type='Hospital'";
    $hospital= $db->select($queryhospital);
    if($hospital){
        $hospital= mysqli_num_rows($hospital);
        if($hospital!= 0){
        	$hospital; 
        }else{
	        $hospital= 0; 
        }
    }
    

   
?>
            <li><a href="#" class="button small secondary ">Doctors (<?php if($count==0){ echo '0'; }else{ echo $count-21; } ?>)</a></li>         
            <li><a href="#" class="button small secondary ">Blood Donator (<?php if($donars==0){ echo '0'; }else{ echo $donars; } ?>)</a></li>
            <li><a href="#" class="button small secondary ">  Ambulance  (<?php if($ambulance== 0){echo '0';}else{echo $ambulance; } ?>)</a></li>
            <li><a href="#" class="button small secondary ">  Hospital (<?php if($hospital== 0){echo '0';}else{echo $hospital; } ?>)</a></li>
<?php 
   }else{
?>
<?php 
     $author = $_SESSION['username'];
    $query = "SELECT * FROM tb_doctor WHERE status = '1' AND created_by='$author'";
    $msg  = $db->select($query);
    if($msg){
        $count = mysqli_num_rows($msg);
        if($count!=0){
        	$count; 
        }else{
        	$count=0; 
        }
    }
?>          
            <li><a href="#" class="button small secondary ">Your Entry || DOCTOR (<?php if($count==0){ echo '0'; }else{ echo $count; } ?>)</a></li>
 <?php } ?>   
          </ul>
      </div>
    </div>
</section>