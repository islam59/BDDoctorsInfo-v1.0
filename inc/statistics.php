<!------------------statistic section -------->
<section class="statisticsmenu">
	<div class="row">
		<div class="small-12 medim-12 large-12" class="staticsmenuitem">
			<!----------------------------------- -->
			<!-----------post your add.---------- -->
			<!----------------------------------- -->
<?php 
    $query = "SELECT * FROM tb_doctor WHERE status = '1'";
    $msg  = $db->select($query);
    if($msg){
        $count = mysqli_num_rows($msg);
    }
?>
			<span class="tiny secondary hollow button">Total Doctors:</span><span class="tiny button"><?php echo $count; ?></span>
<?php 
    $querya = "SELECT * FROM tb_ambulance WHERE status = '1'";
    $msga  = $db->select($query);
    if($msga){
        $countambulance = mysqli_num_rows($msga);
    }
?>
			<span class="tiny secondary hollow button">Total Ambulance:</span><span class="tiny button"><?php echo $countambulance; ?></span>
		</div>	
	</div>
</section>