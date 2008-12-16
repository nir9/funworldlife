
<?php $this->load->view("header.php", $title) ?>
	
		<div dir='rtl' align="center">
	
		<?php echo form_open('login/submit'); ?>
		<img src="../images/logintitle.png">
		<fieldset>
		<br>
		<br>
		
איך מתחברים?
קודם עם אתה חדש באתר וזה פעם ראשונה אתה צריך להרשם לאתר ואחרי שאתה נרשם אתה צריך למלות את השם משתמש שכתבתה בהרשמה ואת הסיסמה שכתבתה ואתה גם צריך לסקור את הסיסמה עם יש תקלה אז שילחו לנו מייל בכתובת <a href="mailto:admin@funworldlife.com">admin@funworldlife.com </a>
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
		עם אין לך חשבון אז פתח אכשיו
		<br>
		עם יש תקלה בהרשמה אז תיפנו לאימייל שלנו <a href="mailto:admin@funworldlife.com">admin@funworldlife.com </a>
		<br>
		
		</fieldset>
<?php echo form_close(); ?>
		<a href="register"><img src="<?php print base_url() ?>register_login.png"></a>
		</div>
				<br>
		<br>
		<?php include("footer.php") ?>
	</body>
</html>
