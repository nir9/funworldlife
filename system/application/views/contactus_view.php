
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<h1>צור קשר</h1>
אימייל: <a href="mailto:admin@funworldlife.com">admin@funworldlife.com</a>

		</div>
		<br><hr>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>
