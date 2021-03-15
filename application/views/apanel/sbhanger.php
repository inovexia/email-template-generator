<h2 class="text-purple mt-4">Smart Building Hanger</h2>


<?php echo form_open_multipart ('appgen_actions/sbhanger', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
    <div class="upload-btn-wrapper">
        <button class="btn-upload">Upload logo</button>
        <input type="file" name="userfile" />
    </div>

	<div class="mt-4">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-green">Save & Generate PDF</button>
	</div>

    <div class="errors text-danger mt-3">
    	<?php 
    	if (isset ($_GET['status']) && $_GET['status'] == 'false') {
    		echo $_GET['error'];
    	}
    	?>
    </div>

</form>