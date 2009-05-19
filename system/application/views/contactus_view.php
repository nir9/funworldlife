
<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<h1>צור קשר</h1>
		שגיאות,תקלות,באגים שלחו אלינו ל
		<a href="mailto:admin@funworldlife.com">admin@funworldlife.com</a>
		
		<br>
		ויענו תוך עד 72 שעות עם לא יש לישלוח שוב הודעה
		</div>
		<br><hr>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>
