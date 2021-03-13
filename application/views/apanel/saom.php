<h2 class="text-purple mt-4">Smart Apartment Online Messaging</h2>


<?php echo form_open ('appgen_actions/saom', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
	<label class="text-purple">Variable fields:</label>
	<input type="text" name="dev_name">

	<div class="mt-4">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-purple">Save & Generate PDF</button>
	</div>

</form>