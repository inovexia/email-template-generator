<h2 class="text-purple mt-4">Smart Building Hanger</h2>


<?php echo form_open_multipart ('appgen/sbhanger', ['class'=>"", 'id'=>'sbhanger-form']); ?>
	<div class="form-group">
	    <div class="upload-btn-wrapper">
	        <button class="btn-upload">Upload logo</button>
	        <input type="file" placeholder="" name="userfile" id="file-upload" onchange="preview_image (this)">
	    </div>
	</div>

	<div class="form-group">
        <div id="upload-image-preview" class="mt-1"></div>
    </div>

	<div class="mt-2">	
        <button type="button" onclick="htmlPreview()" class="btn  btn-sm button-purple d-none">Normal Preview </button>
        <button type="button" onclick="pdfPreview()"  class="btn  btn-sm button-green">PDF Preview</button>
        <div class="mt-2"></div>
        <a href="<?php echo site_url (); ?>" class="btn  btn-sm button-purple-outline">Back</a>
	</div>
</form>