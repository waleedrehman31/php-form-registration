<?php include './vendor/php/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./vendor/style/style.css" />
		<title>Formsss</title>
	</head>
	<body>
		<main>
      <?php if (isset($_GET['message'])) : ?>
						<p><?php echo $_GET['message'] ?></p>
			<?php endif ?>
			<form method="POST" action="./vendor/php/process.php">
				<div class="form-div">
					<label class="form-label" for="name">Name</label>
					<input class="" type="text" name="fullName" id="name" /><span
						id="name_error_text"
						class="error-text span-hidden"
						>Name must not be empty</span
					>
				</div>
				<div class="form-div">
					<label class="form-label" for="email">Email</label>
					<input class="" type="email" name="email" id="email" /><span
						id="email_error_text"
						class="error-text span-hidden"
						>Email must not be empty</span
					>
				</div>
				<div class="form-div">
					<label class="form-label" for="password">Password</label>
					<input class="" type="password" name="password" id="password" />
					<span id="password_error_text" class="error-text span-hidden"
						>Password must be not empty and be greater then 8
					</span>
				</div>
        <input type="submit" name="add" value="submit" id="submit_btn"/>
				<!-- <button type="submit" id="submit_btn">Submit</button> -->
			</form>
		</main>
		<!-- <script src="./vendor/js/form-validation.js"></script> -->
	</body>
</html>
