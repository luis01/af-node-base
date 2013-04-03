<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Socket</title>
<script src="/socket.io/socket.io.js"></script>
<script type="text/javascript">
  var socket = io.connect("http://appfog.com:2000");
	var c = document.getElementById('m');
	socket.on('users', function(data){
		c.innerHTML = "Hay: "+data.number;	
		console.log("hay "+data.number);
		
	});
</script>
</head>

<body>
<div id="m">Contando usuarios...</div>
</body>
</html>
