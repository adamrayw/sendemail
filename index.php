<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		* {
			font-family: Arial;

		}
		form > div {
			margin: 10px 0 0 0;
		}

		input, textarea {
			width: 200px;
			padding: 6px 10px;
			border-width: 1px;
			border-color: gray;
			background-color: white;
			border-radius: 6px;
			font-size: 16px;
		}

		button {
			border-width: 0;
			background-color: skyblue;
			border-radius: 6px;
			padding: 10px;
			color: white;
			width: 100px;
			font-size: 16px;
			transition: .3s ease;
			width: 100%;
		}

		button:hover {
			background-color: lightblue;
			cursor: pointer;

		}

		.card {
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			padding: 20px 10px;
			max-width: 300px;
			margin: 6em auto;
			text-align: center;
			display: flex;
			justify-content: center;
			align-content: center;
			border-radius: 10px;
		}

		.main {
			height: 100%;
			width: 100%;
		}

		.copy {
			margin: 10px 0;
			font-size: 10px;
			color: gray;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="card">
			<div>
				<h1>Contact Us</h1>
				<form action="mail.php" method="POST">
					<div>
						<input type="text" name="name" placeholder="Name">
					</div>
					<div>
						<input type="email" name="email" placeholder="Email">
					</div>
					<div>
						<textarea name="description" placeholder="Pesan"></textarea>
					</div>
					<div>
						<button type="submit">Kirim</button>
					</div>
					<p class="copy">Copyright &copy; Adam Ray</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>