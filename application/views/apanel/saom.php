<h2 class="text-purple mt-4">Smart Apartment Online Messaging</h2>


<?php echo form_open ('appgen_actions/saom', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
    <div class="upload-btn-wrapper">
		<label class="text-purple">Development name</label>
		<input type="text" name="dev_name">
	</div>

	<div class="mt-4">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-green">Save & Generate PDF</button>
	</div>

</form>