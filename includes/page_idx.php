<?php
	function prevPage(){
		if ($_GET["page"] > 0){
			$newPage = $_GET["page"] - 1;
			header('Location: http://lab.local/index.php?page=' . $newPage);
		}
	}

	function nextPage(){
		$newPage = $_GET["page"] + 1;
		header('Location: http://lab.local/index.php?page=' . $newPage);
	}
	
	if(array_key_exists('prev', $_POST)){
		prevPage();
	}else if (array_key_exists('next', $_POST)){
		nextPage();
	}
?>

