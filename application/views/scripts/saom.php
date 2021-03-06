<script>

  const submitFormSelector = document.getElementById ("saom-form");
  const outputDiv = document.getElementById ("outputDiv");

  function htmlPreview () {

    const formURL = '<?php echo site_url ('appgen_actions/saom_preview'); ?>';
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

    const formURL = '<?php echo site_url ('appgen_actions/saom_pdf'); ?>';
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