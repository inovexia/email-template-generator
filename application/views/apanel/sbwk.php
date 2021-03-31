<h2 class="text-purple mt-4">Smart Building Welcome Kit</h2>


<?php echo form_open_multipart ('appgen_actions/sbwk', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
    <div class="upload-btn-wrapper">
        <button class="btn-upload">Upload logo</button>
        <input type="file" placeholder="" name="userfile" id="file-upload"/>
        <div id="file-upload-filename" style="color:#462a69; font-family: helvetica; padding-top:10px; margin-bottom:20px;"></div>
        <label for="username" style="color:#462a69;">Username:</label>
        <input type="text" name="username" id="username" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"/>
        <label for="password" style="color:#462a69;">Password:</label>
        <input type="text" name="password" id="password" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"/>
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
