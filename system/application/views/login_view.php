
<?php $this->load->view("header.php", $title) ?>
	
		<div dir='rtl' align="center">
	
		<?php echo form_open('login/submit'); ?>
		<img src='<?php print base_url(); ?>images/Login Main Image.png'>
		<fieldset>
		<br>
		<br>
		איך מיתחברים? קודם כל עם אין לך שחקן אז אתה צריך להכין שחקן בהרשמה למלא את הפרטים ולזכור את הסיסמה ואת השם מישתמש אחר כך אתה ממלא
		את הסיסמה שלך ואת השם מישתמש את הסיסמה אסור בהחלט לגלות ואז לילחוץ התחברות עם יש בעיות עם ההתחברות יש לישלוח אימייל לאתר ויענו
		תוך עד 72 שעות ועם לא אז יש לישלוח שוב הודעה הכתובת מייל: <a href="mailto:admin@funworldlife.com">
		admin@funworldlife.com
		</a>
		תודה.

<br><br><table style="background-image:url(../images/bgdown.png) ; width: 900;" align="center">
		שם משתמש: <?php echo form_input($username); ?><a href="forgot">
		שכחתי שם משתמש</a><br>
		סיסמה: <?php echo form_password($password); ?> <a href="forgot">
		שכחתי סיסמה</a>
		<br>
		<?php echo form_submit('submit', 'התחברות'); ?>
		<input type='reset' value='אפס טופס'>
		</table>
		<br><br>
		<br>
		
		</fieldset>
<?php echo form_close(); ?>
		<a href="register"><img src="<?php print base_url() ?>images/register_login.png"></a>
		</div>
				<br>
		<br>
		<?php include("footer.php") ?>
	</body>
</html>
