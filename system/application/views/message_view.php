
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
<?php print $message; ?>
		<br>

<?php 
if (isset($_SERVER['HTTP_REFERER'])) {
	$referer = $_SERVER['HTTP_REFERER'];
}
else {
	$referer = base_url();
}
?>

	<input type="submit" onclick="window.location='<?php print $referer; ?>'" value="חזרה לעמוד הקודם -->">
		</div>
	</body>
</html>
