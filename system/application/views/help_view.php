
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<h1>עזרה</h1>
		<br>
<hr>שאלה:
		איך משיגים Fun-Coins(הכסף של האתר)?
<br>תשובה:
 עם אתה רוצה להסיג Fun-Coins אז אתה
	 צריך או לעבוד בעבודות וירטואליות או למצוא כסף על הריצפה
	 <hr>
שאלה:
	 <br>
תשובה:

<hr>
		<?php $this->load->view("footer.php", $title) ?>
		</div>
	</body>
</html>
