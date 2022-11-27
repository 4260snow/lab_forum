<?php
	function prevPage(){
		if ($index > 0){
			//header('Location: http://lab.local/index.php');
		}
	}

	function nextPage(){
		//header('Location: http://lab.local/index.php');
	}
	
	if(isset($_GET["prev"])){
		prevPage();
	}else if (isset($_GET["next"])){
		nextPage();
	}
?>

