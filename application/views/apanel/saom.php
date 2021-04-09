<h2 class="text-purple mt-4">Smart Apartment Online Messaging</h2>

<?php echo form_open ('appgen/saom', ['id'=>"saom-form"]); ?>

	<div class="form-group">
		<label class="text-purple">Development name</label>
		<input type="text" class="form-control" name="dev_name" value="<?php echo set_value ('dev_name', ''); ?>">
	</div>
	
	<div class="form-group">
		<button type="button" onclick="htmlPreview()" class="btn  btn-sm button-purple">Normal Preview </button>
		<button type="button" onclick="pdfPreview()"  class="btn  btn-sm button-green">PDF Preview</button>
		<div class="mt-2"></div>
    	<a href="<?php echo site_url (); ?>" class="btn  btn-sm button-purple-outline">Back</a>
	</div>


	<div class="mt-4">
	</div>

</form>