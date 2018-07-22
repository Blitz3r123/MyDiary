function showEntry(str){
	if(str == ""){
		document.getElementById("searchEntrance").innerHTML = "";
	}else{
		console.log("hello");
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
		};
		
		xmlhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("searchEntrance").innerHTML = this.responseText;
			}
		};

		xmlhttp.open("GET", "getEntry.php?q="+str, true);
		xmlhttp.send();
	}	
}