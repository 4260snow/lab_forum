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
			if(!(isset($ !!! ["index"]))){
				
			}
		?>
		
		<!--Первые 10 постов-->
		<table width="600">
			<h1 align="center">Last notes</h1>
			<?php include_once 'includes/output.php'; ?>
		</table> 
		
		<!--Переход между страницами-->
		<p align='center' ><a href="http://lab.local/includes/page_idx.php?prev=1"> prev  </a>
		<a href="http://lab.local/includes/page_idx.php?next=1">  next </a></p>
	</body>
</html>





























