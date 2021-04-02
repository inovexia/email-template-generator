<h2 class="text-purple mt-2">Smart Building Welcome Kit</h2>


<?php echo form_open_multipart ('appgen/sbwk', ['class'=>"pure-form pure-form-stacked"]); ?>
    <div class="upload-btn-wrapper">
        <button class="btn-upload">Upload logo*</button>
        <input type="file" placeholder="" name="userfile" id="file-upload" onchange="preview_image (this)">
        <div id="upload-image-preview" class="mt-1"></div>

        <label for="username" style="color:#462a69;">Username*:</label>
        <input type="text" name="username" id="username" style="border:1px solid #462a69; color:#462a69; background-color:#fff;" value="<?php echo set_value ('username'); ?>">
        
        <label for="password" style="color:#462a69;">Password*:</label>
        <input type="text" name="password" id="password" style="border:1px solid #462a69; color:#462a69; background-color:#fff;" value="<?php echo set_value ('password'); ?>">
    </div>

	<div class="mt-2">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-green">Generate PDF</button>
	</div>
    
</form>
