<section>
	
	<div class="row">

		<div class="col-md-1" >
		</div>

		<div class="col-md-10">
			<h4 style='color:black;margin-left: 15px;'>Upload .CSV file</h4>

			<div class="row d-flex justify-content-center">
			<form style="width:50%;height:50%;" id="contact-form" method="POST" action="<?php echo WWWROOT; ?>modules/upload_solution.php" class="" enctype="multipart/form-data">
				<h2 class="text-center">Please click browse to select the .CSV file you wish to upload.</h2>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-text"><i style="color:#555;"></i></span>
						<input class="form-control" size=100 type="file" name="csv_file" id="csv_file" placeholder="Upload CSV File..." required  >
					</div>
				</div>
				
				<div class="form-group"><button id="btn-submit"  data-toggle="tooltip" title="Popover Header" data-placement="right" class="btn btn-primary g-recaptcha" data-sitekey="6Lc-3twcAAAAAEfD1f0-1BxIVMgXc60ZgpVmfdq9" data-callback='onSubmit' data-action='submit' name="submit" type="submit" title="TST">Upload</button></div>
			</form>
			</div>

		</div>
	</div>	

</section>