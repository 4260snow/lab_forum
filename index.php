<!DOCTYPE>

<html>
	<head>
		<title> Main page </title>
		<link rel="stylesheet" href="/includes/styles.css">
	</head>
	<body>
		<form action="addnote.php" method="POST">  <!-- enctype="form-data" -->
			<table>
				<thead>
				<tr>
					<td><h2>New note</h2></td>
				</tr>
				</thead>
				
				<tr>
					<td>
						<textarea rows="8" cols="60" name="note" maxlength=840></textarea>
					</td>
				</tr>
				
				<tr>
					<table>
					<tr>
						<td width="320"><input type="file" name="photo" accept="image/png"></td>
						<td ><input type="submit" value="Add new note"></td>
					</tr>
					</table>
				</tr>
			</tabel>
		</form>
		<?php
			if(!(isset($_GET["page"]))){
				header("Location: http://lab.local/index.php?page=" . "0");
			}
		?>
		
		<!--Первые 10 постов-->
		<table width="600">
			<h1 align="center">Last notes</h1>
			<?php include_once "includes/output.php"; ?>
		</table>
		
		<!--Переход между страницами-->
		<?php include "includes/page_idx.php" ?>
		<form method="post">
			<table>
				<tr>
				<td><input type="submit" name="prev"
				class="button" value="prev" /></td>
				<td></td>
				<td><input type="submit" name="next"
				class="button" value="next" /></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>


























