
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
<?php print $message; ?>
		<br>
		<input type="submit" onclick="window.location='javascript:history.go(-1)'" value="חזרה לעמוד הקודם -->">
		</div>
	</body>
</html>
