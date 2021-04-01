<script>
var submitFormSelectors = document.getElementsByClassName("saom-form");
var i;
for (i = 0; i < submitFormSelectors.length; i++) {
  const submitFormSelector = submitFormSelectors[i];
  if (submitFormSelector) {
    submitFormSelector.addEventListener("submit", (e) => {
      e.preventDefault();
      const formURL = submitFormSelector.getAttribute("action");
      var formData = new FormData(submitFormSelector);
      fetch(formURL, {
        method: "POST",
        body: formData,
      }).then(function (response) {
          return response.blob ();
      }).then (blob => {
      		console.log (blob);
            const url = window.URL.createObjectURL(blob);
        	document.getElementById ('preview').innerHTML = '<object data="data:application/pdf; base64,'+blob+'" type="application/pdf" height="400" width="100%"></object>';
        	//a.click();
        	//document.location = url;

        	window.URL.revokeObjectURL(url);
      }).catch((error) => console.error(error));
    });
  }
}
</script>