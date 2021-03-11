var submitFormSelectors = document.getElementsByClassName("validate-form");
var i;
for (i = 0; i < submitFormSelectors.length; i++) {
  const submitFormSelector = submitFormSelectors[i];
  if (submitFormSelector) {
    submitFormSelector.addEventListener("submit", (e) => {
      e.preventDefault();
      const formURL = submitFormSelector.getAttribute("action");
      var formData = new FormData(submitFormSelector);
      //toastr.clear();
      //toastr.info("Please wait...");
      fetch(formURL, {
        method: "POST",
        body: formData,
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (result) {
          //toastr.clear();
          if (result.status == true) {
            //toastr.success(result.message, "", { timeOut: 1000 });
            if (result.redirect != "") {
              document.location = result.redirect;
            }
          } else {
            var message = result.error.replace("/[\n\r]/g", "");
            //toastr.error(message, "", { timeOut: 2000 });
          }
        });
    });
  }
}
