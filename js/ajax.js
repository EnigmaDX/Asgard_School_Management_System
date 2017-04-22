function loadDoc()
{
	var userInput = document.getElementById('searchtxt').value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{ 
			document.getElementById('result').innerHTML = this.responseText;
		}
	};
	xhttp.open('GET','../controller/studentlist.php?searchtxt=' + userInput, true);
	xhttp.send();    
}

