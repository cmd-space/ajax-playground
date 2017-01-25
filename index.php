<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
				content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Ajax Playground</title>
	</head>
	<body>
		<script>
			  function init() {
				  var myObject = new XMLHttpRequest();

				  myObject.open("GET", "javascript.php", true);

				  myObject.onreadystatechange = function() {
					  if(myObject.readyState == 4 && myObject.status == 200) {
						  document.getElementById("container").innerHTML = myObject.responseText;
					  }
				  }

				  myObject.send("user=Mason&email=test@test.com&role=Admin");
			  }
		</script>

		<button onclick="init()">Send Info</button>

		<div id="container">

		</div>
	</body>
</html>