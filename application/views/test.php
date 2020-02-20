<html>
<body>
<p>SUCCESS</p>

<?php
	echo "<pre>"; print_r($data1); echo "</pre>";
	if ($data1 != NULL){
		foreach ($data1 as $row) {
			echo $row['lhardwareid'];
		}
	}
	else{
		//do nothing
	}
?>
</body>
</html>