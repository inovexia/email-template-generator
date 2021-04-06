<h2 class="text-purple mt-4">Smart Apartment Online Messaging</h2>

<?php echo form_open ('appgen/saom', ['class'=>"saom-form"]); ?>

	<div class="form-group">
		<label class="text-purple">Development name</label>
		<input type="text" class="form-control" name="dev_name" value="<?php echo set_value ('dev_name', ''); ?>">
	</div>
	
	<div class="form-group">
    	<a href="<?php echo site_url (); ?>" class="btn  btn-sm button-purple-outline">Back</a>
		<button type="generate" class="btn  btn-sm button-green">Generate PDF</button>
		<div class="mt-2"></div>
	</div>


	<div class="mt-4">
	</div>

</form>