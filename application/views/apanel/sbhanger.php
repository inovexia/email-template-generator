<h2 class="text-purple mt-4">Smart Building Hanger</h2>


<?php echo form_open_multipart ('appgen/sbhanger', ['class'=>"pure-form pure-form-stacked"]); ?>
    <div class="upload-btn-wrapper">
        <button class="btn-upload">Upload logo</button>
        <input type="file" placeholder="" name="userfile" id="file-upload" onchange="preview_image (this)">
        <div id="upload-image-preview" class="mt-1"></div>
    </div>

	<div class="mt-2">	
    	<a href="<?php echo site_url (); ?>" class="pure-button button-purple-outline">Back</a>
		<button type="submit" class="pure-button button-green">Generate PDF</button>
	</div>
</form>