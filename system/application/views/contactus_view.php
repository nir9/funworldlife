
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<h1>צור קשר</h1>
		שגיאות,תקלות,באגים שלחו אלינו ל
		<a href="mailto:bugs@funworldlife.com">bugs@funworldlife.com</a>
		<br>

		</div>
		<br><hr>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>
