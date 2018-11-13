<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>teoespero.com | Booleans - PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>
		<?php

			// define constants
			define("_NEWLINE", "<br>");
			define("_SPACER", " ");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");
			
			// our Booleans
			$resultOne = TRUE;
			$resultTwo = FALSE;

			echo "resultOne value:" . _SPACER . $resultOne . _NEWLINE;
			echo "resultTwo value:" . _SPACER . $resultTwo . _NEWLINE;
			
		?>
	</body>
</html>

