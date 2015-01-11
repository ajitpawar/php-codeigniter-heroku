<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>

<body>
	<div>Welcome! Hello World.</div>
	<div>
	<?php
		if(isset($userlist)){
			foreach ($userlist as $u) {
				echo $u->username . "<br>";
			}
		}
	?>
	</div>
</body>

</html>