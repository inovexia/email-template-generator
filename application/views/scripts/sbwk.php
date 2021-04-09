<script>

  const submitFormSelector = document.getElementById ("sbwk-form");
  const outputDiv = document.getElementById ("outputDiv");

  function htmlPreview () {

    const formURL = '<?php echo site_url ('appgen_actions/sbwk_preview'); ?>';
    var formData = new FormData(submitFormSelector);

    fetch(formURL, {
      method: "POST",
      body: formData,
    }).then(function (response) {
        return response.json ();
    }).then (function (response) {
      if (response.status == true) {
        outputDiv.innerHTML = response.output;
      } else {
        console.log (response.error);
      }
    }).catch((error) => console.error(error));
  }

  function pdfPreview () {

    const formURL = '<?php echo site_url ('appgen_actions/sbwk_pdf'); ?>';
    var formData = new FormData(submitFormSelector);

    fetch(formURL, {
      method: "POST",
      body: formData,
    }).then(function (response) {
        return response.json ();
    }).then (function (response) {
      if (response.status == true) {
        outputDiv.innerHTML = response.output;
      } else {
        console.log (response.error);
      }
    }).catch((error) => console.error(error));

  }


</script>

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