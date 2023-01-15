<?php

require_once "Settings.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP TTS Script</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/502e111284.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">PHP TTS Script</a>
	  </div>
	</nav>

	<div class="container">
		
		<figure class="text-center" style="margin-top:10em;">
  			<blockquote class="blockquote">
				<p>PHP TTS Script Is A PHP Script Thats Allows You To Convert Text To Speak , You Can Download It Or Play It .</p>
				 </blockquote>
		<figcaption class="blockquote-footer">
		    Made With <i class="fa-solid fa-heart"></i> By <cite title="Source Title"><a href="https://www.youtube.com/channel/UCao-qf0nQ2oN348yY3OW_dA" class="badge bg-dark">Self Learning</a></cite>
		</figcaption>
		</figure>
		

		<form method="post" action="" style="margin-top:6em;">

			<div class="form-floating mb-3" >
		  	<textarea type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="text"></textarea>
			  <label for="floatingInput">Your Text Here</label>
			  <br>
			  <button type="submit" class="btn btn-dark form-control" title="Download" name="convert">Convert To Audio</button>
			</div>
		</form>
		<br>

		<?php
		if (isset($_POST['convert'])) {
			$text = $_POST['text'];

			TTS($text);
		}
		
		?>

	</div>


</body>
</html>
