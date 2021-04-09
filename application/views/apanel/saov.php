<h2 class="text-purple mt-4">Smart Apartment Overview</h2>


<?php echo form_open_multipart ('appgen/saov', ['class'=>"", 'id'=>'saov-form']); ?>
    <div class="form-group">
        <div class="upload-btn-wrapper">
            <button class="btn-upload">Upload logo</button>
            <input type="file" placeholder="" name="userfile" id="file-upload" onchange="preview_image (this)">
        </div>
    </div>

    <div class="form-group">
        <div id="upload-image-preview" class="mt-1"></div>
    </div>

    <div class="form-group">
        <label for="name" style="color:#462a69;">Name:</label>
        <input type="text" name="name" class="form-control" id="name" style="border:1px solid #462a69; color:#462a69; background-color:#fff;" value="<?php echo set_value ('name'); ?>">
    </div>

    <div class="form-group">
        <label for="contact" style="color:#462a69;">Contact No:</label>
        <input type="text" name="contact" class="form-control" id="contact" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"  value="<?php echo set_value ('contact'); ?>">
    </div>

    <div class="form-group">
        <label for="email" style="color:#462a69;">Email:</label>
        <input type="text" name="email" class="form-control" id="email" style="border:1px solid #462a69; color:#462a69; background-color:#fff;"  value="<?php echo set_value ('email'); ?>">
    </div>

	<div class="mt-4">	
        <button type="button" onclick="htmlPreview()" class="btn  btn-sm button-purple d-none">Normal Preview </button>
        <button type="button" onclick="pdfPreview()"  class="btn  btn-sm button-green">PDF Preview</button>
        <div class="mt-2"></div>
    	<a href="<?php echo site_url (); ?>" class="btn btn-sm button-purple-outline">Back</a>
	</div>

</form>
