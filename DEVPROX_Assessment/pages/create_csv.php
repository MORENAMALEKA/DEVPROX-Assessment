<section>
	
	<div class="row">

		<div class="col-md-1" >
		</div>

		<div class="col-md-10">
			<h4 style='color:black;margin-left: 15px;'>Create .CSV file</h4>

			<div class="row d-flex justify-content-center">
			<form style="width:50%;height:50%;" id="contact-form" method="POST" action="<?php echo WWWROOT; ?>inc/fnc.php" class="" >
				<h2 class="text-center">Please enter the amount of records to be generated:</h2>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-text"><i class="fa fa-list-ol" style="color:#555;"></i></span>
						<input class="form-control" type="number" name="no_of_records" id="no_of_records" placeholder="No. of Records..." required>
					</div>
				</div>
				
				<div class="form-group"><button id="btn-submit"  data-toggle="tooltip" title="Popover Header" data-placement="right" class="btn btn-primary g-recaptcha" data-sitekey="6Lc-3twcAAAAAEfD1f0-1BxIVMgXc60ZgpVmfdq9" data-callback='onSubmit' data-action='submit' name="submit" type="submit" title="TST">submit</button></div>
			</form>
			</div>

			

		</div>
	</div>	

</section>