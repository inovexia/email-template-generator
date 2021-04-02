<script>	
	let input = document.getElementById( 'file-upload' );
	let infoArea = document.getElementById( 'upload-image-preview' );	

	function preview_image(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    
	    reader.onload = function(e) {
	      //$('#blah').attr('src', e.target.result);
		  infoArea.innerHTML = '<img src="'+e.target.result+'" width="100%">';
	    }
	    
	    reader.readAsDataURL(input.files[0]); // convert to base64 string
	  }
	}
</script>