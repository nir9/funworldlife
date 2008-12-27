
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<h1><font color="red">תודה רבה שנרשמת לאתר שלנו מקווים שתהנו</font></h1>
		<input type="submit" onclick="window.location='<?php print site_url(); ?>'" value="לחץ כאן כדי להתחיל לשחק">
		</div>
	</body>
</html>
