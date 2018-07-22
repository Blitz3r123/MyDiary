<script>
	function toggleTheme(){
		nav = document.getElementById('nav'); 
		container = document.getElementById('container'); 
		nameButton = document.getElementById('nameButton');
		text = document.getElementById('text');
		htext = document.getElementById('hText');
		ltext1 = document.getElementById('ltext1');
		ltext2 = document.getElementById('ltext2');
		ltext3 = document.getElementById('ltext3');
		
		if(nav.className == "navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse"){
			nav.className = "navbar navbar-toggleable-md fixed-top navbar-light bg-faded";
			container.style.backgroundColor="#292B2C";
			nameButton.style.backgroundColor="#292B2C";
			nameButton.style.color="white";
			text.style.color = "white";
			htext.style.color = "white";
			ltext1.style.color = "white";
			ltext2.style.color = "white";
			ltext3.style.color = "white";
		}else{
			nav.className = "navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse";
			container.style.backgroundColor="white";
			nameButton.style.backgroundColor="white";
			nameButton.style.color="#292B2C";
			text.style.color = "#292b2c";
			htext.style.color = "#292b2c";
			ltext1.style.color = "#292b2c";
			ltext2.style.color = "#292b2c";
			ltext3.style.color = "#292b2c";
		}
	}
</script>
<style>
#container{
	transition-duration: 0.5s;
	-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
}
.ltextWhite{
	color: white;
}
.ltextBlack{
	color: #292b2c;
}
</style>