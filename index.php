<?php
/**
 * Created by PhpStorm.
 * User: 321990
 * Date: 16.01.2018
 * Time: 10:09
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Company Name</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="page-wrapper">
	  <h1>Company Name</h1>

	  <div id="form-messages"></div>
        <form id="SendMessage" method="post" action="mailer.php">

            <div class="field">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="field">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>

			<div class="field">
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
			</div>

            <div class="box">
                <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                <input type="file" name="file" id="file" class="inputfile" hidden="true" data-multiple-caption="{count} files selected" multiple />
            </div>

			<div class="field">
				<button type="submit">Send</button>
			</div>
		</form>
	</div>
	<script src="jquery-2.1.0.min.js"></script>
	<script src="app.js"></script>
</body>
</html>

