function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue+ ";" + expires + ";path=/";
}

function clickClose(){
	setCookie("hidead","1", 1);
	document.getElementById("banner").style.display = "none";
}

function deleteCookie() {
	document.cookie = 'hidead=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

var hidead=getCookie("hidead");
if (hidead === "") {
	document.getElementById("banner").style.display = "block";
}
else{
	document.getElementById("banner").style.display = "none";
}

// 