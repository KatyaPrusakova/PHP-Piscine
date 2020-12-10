var cookie;
var i = 0;
var new_id = document.cookie.split(";").length;
if (new_id) {
for (j = 0; j < 100; j++) {
	if (cookie = getCookie(j)) {
		id = cookie.split("=");
		recreate_to_do(j, id[1]);
		if (i < id[0])
		i = id[0];
	}
}
i++;
}
console.log("outside function" + i);

function start() {

	var txt;
	var thing = prompt("Please enter to do thing:", "Wash dishes");
	if (thing == null || thing == "") {
		txt = "User cancelled the prompt.";
	} else {
		txt = thing;
		console.log("in start" + i);
		recreate_to_do(i, txt);
		i++;
	}
}

function del_to_do(id) {
	if (confirm("ARE YOO SURE YOU WANNA DELETE IT?")) {
		var element = document.getElementById(id);
		element.parentNode.removeChild(element);
		eraseCookie(id);
	}
}

	function recreate_to_do(id, txt) {
		// create new elments
		console.log(id);

		var newParagraph = document.createElement('p');
		newParagraph.setAttribute("id", id);
		newParagraph.setAttribute("onclick","del_to_do(id);");
		setCookie(id, txt, 1);
		var pText= document.createTextNode(txt);

		newParagraph.appendChild(pText);

		var task = document.getElementById('bla');
		var parent = task.parentNode;

		parent.insertBefore(newParagraph, parent.firstChild);
	}

function create_to_do(txt) {
    // create new elments
	var newParagraph = document.createElement('p');
	newParagraph.setAttribute("id", i);

	newParagraph.setAttribute("onclick","del_to_do(id);");
	setCookie(i, txt, 1);
	i++;

    var pText= document.createTextNode(txt);
    newParagraph.appendChild(pText);

    // elements are now created and ready to be added to the DOM.

    // grab element on page you want to add stuff to
    var task = document.getElementById('ft_list');

	// add both new elements to the page as children to the element we stored in firstHeading.

    // get parent node of firstHeading
    var parent = task.parentNode;

    // insert newHeading before FirstHeading
    parent.insertBefore(newParagraph, task);
}

function setCookie(name,value) {
	document.cookie = name + "=" + value;
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c;
    }
    return null;
}

function eraseCookie(id) {
    document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}

