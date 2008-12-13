
<?php $this->load->view("header.php", $title) ?>

		<div dir='rtl'>
	
		<?php echo form_open('register/submit'); ?>
		
		<fieldset>
	<br>
		שם משתמש: <?php echo form_input($username); ?><br>
		סיסמה: <?php echo form_password($password); ?>
		<a style="font-size: 11;">הסיסמה חייבת להיות 4 ומעלה תווים</a>
		<br>
		דואר אלקטרוני: <?php echo form_input($email); ?><br>
		שם פרטי: <?php echo form_input($fname); ?><br>
		שם משפחה: <?php echo form_input($lname); ?><br>
<!--
		תאריך לידה:&nbsp;
		יום:<?php echo form_dropdown($day['name'], $day['options']) ?>&nbsp;
		חודש:<?php echo form_dropdown($month['name'], $month['options']) ?>&nbsp;
		שנה:<?php echo form_dropdown($year['name'], $year['options']) ?>&nbsp;<br>
		ארץ לידה:<?php echo form_dropdown($country['name'], $country['options']) ?>
-->
		&nbsp;<br>
		<?php echo form_submit('submit', 'הרשמה'); ?>
		<input type='reset' value='אפס טופס'>
		<br>
		<br>
		<a style="color: green;"><b>יש לך חשבון?</b></a>
		<br>
		<a href="login"><b>התחבר</b></a>
		</fieldset>
<?php echo form_close(); ?>
		
		</div>
				<br>
		<br>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>
