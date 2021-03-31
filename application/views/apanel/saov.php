<h2 class="text-purple mt-4">Smart Apartment Overview</h2>


<?php echo form_open_multipart ('appgen_actions/saov', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
    <div class="upload-btn-wrapper">
        <button class="btn-upload">Upload logo</button>
        <input type="file" placeholder="" name="userfile" id="file-upload" />
        <div id="file-upload-filename" style="color:#462a69; font-family: helvetica; padding-top:10px; margin-bottom:20px"></div>
        <label for="name" style="color:#462a69;">Name:</label>
        <input type="text" name="name" id="name" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"/>
        <label for="contact" style="color:#462a69;">Contact No:</label>
        <input type="text" name="contact" id="contact" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"/>
        <label for="email" style="color:#462a69;">Email:</label>
        <input type="text" name="email" id="email" style="border:1px solid #462a69; color:#462a69; background-color:#fff;" />
    </div>

	<div class="mt-4">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-green">Generate PDF</button>
	</div>

    <div class="errors ">
    	<?php 
    	if (isset ($_GET['status']) && $_GET['status'] == 'false') {
    		echo $_GET['error'];
    	}
    	?>
    </div>

</form>
