<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GIT API</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				var uname = $("#username").val();
				var repo = $("#repository").val();
				var content = $("#content").val();
				var url = "https://api.github.com/repos/"+uname+"/"+repo+"/contents/"+content+"";
				$.get(url, function(response){
					var program = response.content;
					var dProgram = atob(program);
					var newprogram = dProgram.replace(/</g,"&#60")
					console.log(newprogram);
					$('#program').html(newprogram);
					var line = newprogram.split("\n");
					$('#count').html("The length of this program is "+line.length+".");
					console.log(line.length);
			});
			});
		}); //end ready
	</script>
</head>
<body>
	</br>
	<div class="container">
		<input type="textfield" id="username" placeholder="Enter username">
		<input type="textfield" id="repository" placeholder="Enter the repository">
		<input type="textfield" id="content" placeholder="Enter the content">
		<input type="submit" id="submit"/>
		</br>
		</br>
		<pre id="program">
		</pre>
		<h4 id="count"></h4>
	</div>
</body>
</html>