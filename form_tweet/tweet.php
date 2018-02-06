<!DOCTYPE html>
<html>
<head>
	<title>My_Twitter</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<!-- <link rel="shortcut icon" href="image/favicon.png"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="css/style.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
	<div class="tweet-box">
		<img src="img/default_profile.png" id="defaultImg" enctype="multipart/form-data">
		<form method="POST" action="tweeter.php">
			<input type="text" name="textTweet" placeholder="Quoi de neuf ?" class="form-control" id="textBox">
			<div class="uploadBox">
				<i class="far fa-image" id="uploadImg"></i>
				<input type="file" name="photo" id="upload">
				<!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
			</div>
			<button type="submit" class="btn btn-primary" id="btnTweeter">Tweeter</button>
		</form>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>