<?php
	if(array_key_exists("Like_0",$_POST)){
		//sql
	} else if(array_key_exists("Like_1",$_POST)){
		//sql
	} else if(array_key_exists("Like_2",$_POST)){
		//sql
	} else if(array_key_exists("Like_3",$_POST)){
		//sql
	} else if(array_key_exists("Like_4",$_POST)){
		//sql
	} else if(array_key_exists("Dislike_0",$_POST)){
		//sql
	} else if(array_key_exists("Dislike_1",$_POST)){
		//sql
	} else if(array_key_exists("Dislike_2",$_POST)){
		//sql
	} else if(array_key_exists("Dislike_3",$_POST)){
		//sql
	} else if(array_key_exists("Dislike_4",$_POST)){
		//sql
	}

	function output($idx, $n){
		echo("<form method='post'>");
		echo("<tr><td>");
		
		echo("<table width=\"520\" cellspacing=\"0\" cellpadding=\"4\"  border=\"1\"><tr><td>");
		echo("<p> Note №$idx </p>");
		echo("post:<br>" . "sql"); //sql
		echo("</td></tr></table>");
		
		echo("<td>");
		$like = 0 ; //sql
		$nameLike = "Like_".strval($n);
		$valLike = "Like\t" . strval($like);
		echo("<input type=\"submit\" name=\"$nameLike\"
				class=\"button\" value=\"$valLike\" />");
		echo("</td>");
		
		echo("<td>");
		$dislike = 0 ; //sql
		$nameDislike = "Dislike_".strval($n);
		$valDislike = "Dislike\t" . strval($dislike);
		echo("<input type=\"submit\" name=\"$nameDislike\"
				class=\"button\" value=\"$valDislike\" />");
		echo("</td>");
		
		echo("</td></tr>");
		echo("</form>");
	}

	for ($i = 0; $i < 5; $i += 1) {
		output($_GET["page"] * 5 + $i, $i);
	}
?>

