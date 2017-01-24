// Hide current page and replace it with new one
function showPage(p) {
	$("#" + gCurPage).addClass("hidden");
	$("#" + p).removeClass("hidden");
	gCurPage = p;
	
	// Since we may be at bottom of page, scroll back to top
	window.scrollTo(0, 0);
	switch (p) {
		case "page_landing" :
			landing.initForms();
			break;
    }
}

// ************ Validation helpers ***************
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}  

function set_disabled(selector, isdisabled)
{
    $(selector).prop("disabled", isdisabled).removeClass("disabled").addClass(isdisabled ? "disabled" : "");
}

