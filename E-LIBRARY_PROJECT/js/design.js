function addbook() {
	document.getElementById('addbook').style.display="block";
}

function all_book(){
	document.getElementById('all').style.display="block";
	document.getElementById('available').style.display="none";
	document.getElementById('not_available').style.display="none";
}
function available(){
	document.getElementById('all').style.display="none";
	document.getElementById('available').style.display="block";
	document.getElementById('not_available').style.display="none";
}
function not_available(){
	document.getElementById('all').style.display="none";
	document.getElementById('available').style.display="none";
	document.getElementById('not_available').style.display="block";
}

function back_button(){
	document.getElementById('addbook').style.display="none";
}
var i=0;
function reg(){
	i++;
	if (i%2!=0){
	    document.getElementById('reg1').style.display="block";
	}
	else{
		document.getElementById('reg1').style.display="none";
	}
}

function newbooks(){
	document.getElementById('newbook').style.display="block";
	i++;
	if (i%2!=0){
	    document.getElementById('newbook').style.display="block";
	}
	else{
		document.getElementById('newbook').style.display="none";
	}
}

function ds_user(){
	document.getElementById('bk_dt').style.display="block";
}