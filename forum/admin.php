<?php
	echo "Hoi ik ben een admin" . "<br><br>";
	if (isset($_POST)) {
		echo "<a href=\"?pag=" . "\">Klik hier voor alle users</a>";
	}