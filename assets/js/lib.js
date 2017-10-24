var display = "show";
function hide(name)
{
	display = "hide";
	document.getElementById(name).style.display = "none";
	return true;
}

function show(name)
{
	display = "show";
	document.getElementById(name).style.display = "block";
	return true;
}

function toogle(name)
{
	if (display == "hide") {
		show(name);
	}else{
		hide(name);
	}

}

function ajaxGet(url,callback)
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function(){
		if (ajax.readyState == 4 && ajax.status == 200) {
			var data = ajax.responseText;
			callback(data);
		}
		 
	}
	ajax.open("GET",url,true);
	ajax.send();
}

function ajaxPost(url,data,callback)
{
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function(){
		if (ajax.readyState == 4 && ajax.status == 200) {
			var data = ajax.responseText;
			callback(data);
		}
	}
	ajax.open("POST",url,true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send(data.join("&"));
}