<section>
	
	<?php $message = $_POST['message']; ?>

	<div class="row">

		<div class="col-md-1" >
		</div>

		<div class="col-md-10">
			<h4 style='color:black;margin-left: 15px;'></h4>

			<div class="row d-flex justify-content-center">
			<form style="width:50%;height:50%;" id="contact-form" method="POST" action="<?php echo WWWROOT; ?>inc/fnc.php" class="" >
				<h2 class="text-center"><?php echo $message; ?></h2>
				<div class="form-group">
					
			</form>
			</div>

			

		</div>
	</div>	

</section>