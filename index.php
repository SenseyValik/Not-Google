<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/notGoogleIcon.ico">
	<title>Not google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="resources/css/styles.css">
</head>

<body>
	<div class="container">
		<div class="google-logo">
			<h1>Mindes Keep</h1> </div>
		<div class="search-container">
			<form action="search.php" method="GET">
				<input type="text" class="search-box" name="request" title="Search" autofocus required>
				<div>
					<input type="submit" class="search-button" value="Remind">
                    <input type="submit" class="search-button" value="+">
                </div>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
