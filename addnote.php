<!DOCTYPE>

<html>
	<head>
		<title> Main page </title>
		<link rel="stylesheet" href="/includes/styles.css">
	</head>
	<body>
		<?php
			$user = "root";
			$database = "posts";
			$table = "posts";
			$text = $_POST['note'];
			
			if (!(isset($_POST['note'])) || strlen($text) == 0){
				print("Note must not be empty");
				die();			
			}
			
			try {
				$conn = new PDO("mysql:host=localhost;dbname=$database", $user);
				$sql = "INSERT INTO `$table` (`text`) VALUES ('$text')";
				echo "В таблицу Users добавлено строк: " . $conn->exec($sql);
				header("Location: http://lab.local/index.php");
			} catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		?>
	</body>
</html>
