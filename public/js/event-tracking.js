document.addEventListener("DOMContentLoaded", function () {

    var phone = document.querySelectorAll("a[href^='tel:']"),
        email = document.querySelectorAll("a[href^='mailto:']"),
        alert = document.querySelectorAll(".alert.alert-success");

    for (var i = 0; i < phone.length; i++) {
        phone[i].addEventListener("click", function () {
            gtag('event', 'phone_click', {
            	'event_category': 'phone number',
            	'event_label': 'contact'
            })
        });
    }

    for (var i = 0; i < email.length; i++) {
        email[i].addEventListener("click", function () {
            gtag('event', 'email_click', {
            	'event_category': 'email address',
            	'event_label': 'contact'
            })
        });
    }

    for (var i = 0; i < alert.length; i++) {
    	if (alert[i].innerText == "Data Submitted Successfully...!") {
    		gtag('event', 'form_submission', {
    			'event_category': window.location.pathname
    		})
    	}
    }

}, false);