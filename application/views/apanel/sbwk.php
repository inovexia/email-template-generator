<div class="header">
    <h1 class="brand-title">TELUS </h1>
    <h2 class="brand-tagline">PDF Generator</h2>
    <hr>
	
	<div class="">

		<?php echo form_open_multipart ('appgen_actions/sbwk', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
			<div class="pure-g">
		        <input type="file" placeholder="" name="userfile" />
		    </div>
			<div class="pure-g">
		        <button type="submit" class="pure-button pure-button-primary">Save & Generate PDF</button>
		    </div>

		    <div class="errors ">
		    	<?php 
		    	if (isset ($_GET['status']) && $_GET['status'] == 'false') {
		    		echo $_GET['error'];
		    	}
		    	?>
		    </div>
		</form>

	</div>

</div>