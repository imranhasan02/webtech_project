		
		
		
		
		function Request(value) {
			document.getElementById("contentHolder").innerHTML = value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("contentHolder").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET", "gethint.php?q="+value, true); //true=Asynchronous Request
			xmlhttp.send(); 
		}