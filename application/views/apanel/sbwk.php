<h2 class="text-purple mt-4">Smart Building Welcome Kit</h2>


<?php echo form_open_multipart ('appgen_actions/sbwk', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
	<label class="text-purple">Variable fields:</label>
    <input type="file" placeholder="" name="userfile" />

	<div class="mt-4">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-purple">Save & Generate PDF</button>
	</div>

    <div class="errors ">
    	<?php 
    	if (isset ($_GET['status']) && $_GET['status'] == 'false') {
    		echo $_GET['error'];
    	}
    	?>
    </div>

</form>
