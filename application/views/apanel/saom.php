<div class="header">
    <h1 class="brand-title">TELUS </h1>
    <h2 class="brand-tagline">PDF Generator</h2>
    <hr>
	
	<div class="">

		<?php echo form_open ('appgen_actions/saom', ['class'=>"pure-form pure-form-stacked validate-forms"]); ?>
			<div class="pure-g">
		        <input type="text" placeholder="Development Name" name="dev_name" />
		    </div>
			<div class="pure-g">
		        <button type="submit" class="pure-button pure-button-primary">Save & Generate PDF</button>
		    </div>
		</form>

	</div>

</div>