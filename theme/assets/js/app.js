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
      }).then(function (response) {
          return response.json();
      }).then(function (result) {
          //toastr.clear();
          if (result.status == false) {
            document.getElementById('messages').innerHtml = result.error;
            //toastr.success(result.message, "", { timeOut: 1000 });
          } else {
            if (result.redirect != "") {
              document.location = result.redirect;
            }
            //toastr.error(message, "", { timeOut: 2000 });
          }
      });
    });
  }
}
