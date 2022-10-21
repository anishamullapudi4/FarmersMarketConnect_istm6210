/*
  ISTM 6210
  Fall 2022
  Project - Farmers Market Connect

  Author: Loren Pfeiffer
  Date: 10/21/22
*/

/*window.onload = init;*/

/* responsible for setting up event listeners on page */
/* function init() { */

	/* ensures all required fields in form are not empty & shows an alert if they are*/
/*	document.forms[0].onsubmit = function checkForEmptyFields() {
    	var customer = document.getElementById("customerRole");
    	var vendor = document.getElementById("vendorRole");

    	if (customer.checked || vendor.checked) { }
    	else { alert("Please select a role."); return false; }

      /* do the same for every variable within the form to ensure it is properly filled out by user */
  /*  }
} */


function showCustomerFields() {
   document.getElementById("customerFields").hidden = false;
   document.getElementById("vendorFields").hidden = true;
}

function showVendorFields() {
   document.getElementById("vendorFields").hidden = false;
   document.getElementById("customerFields").hidden = true;
}
