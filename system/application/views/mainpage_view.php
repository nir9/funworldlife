
<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<br>
		<div style="background: cyan; width: 900; font-family: Arial;">
		<b>חדשות האתר</b>
		<br>
		<br>
		25/8/09:
		
		היום אנחנו נתחיל למסור חדשות על עידכונים.<br>
		לוגו האתר שונה<br>
		היום הוחלט לשנות את הגרפיקה של הרחובות התחלנו עם הרחוב הראשון אולי בעוד שבוע נסיים עם כל הרחובות.<br>
		פאן וורלד ליף אכשיו בתקופת עידכונים בזמן האחרון אתם תיראו הרבה עידכונים.<br>
		
		
		
		</div>
		<br>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>
