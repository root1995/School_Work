function disableTrue( ) 
{
    document.getElementById("textEnable").disabled = true;
	document.getElementById("textEnable").value = "";
}
function disableFalse()
{
	document.getElementById("textEnable").disabled = false;
}
$("#icoregister").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});