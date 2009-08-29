<script type="text/javascript">
function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
</script>

<div align="left" style="background: yellow; width: 970;" dir="rtl">

	ברוך הבא <?php print $user_name; ?>&nbsp;|&nbsp;
	כסף:<?php print $user_info->money; ?>
	<!--בריאות:<?php print $user_info->health; ?>--->
		
<a href="<?php echo site_url(); ?>/login/logout" onmouseover="roll_over('התנתקות', '<?php print base_url(); ?>images/logout2.png')"
onmouseout="roll_over('התנתקות', '<?php print base_url(); ?>images/logout1.png')">
<IMG SRC="<?php print base_url(); ?>images/logout1.png" WIDTH="100" HEIGHT="50"
NAME="התנתקות" BORDER="0">
</A>


<a href="<?php echo site_url(); ?>/map" onmouseover="roll_over('מפה', '<?php print base_url(); ?>images/map2.png')"
onmouseout="roll_over('מפה', '<?php print base_url(); ?>images/map1.png')">
<IMG SRC="<?php print base_url(); ?>images/map1.png" width="100" HEIGHT="50"
NAME="מפה" BORDER="0">
</a>

<a href="<?php echo site_url(); ?>/mainpage" onmouseover="roll_over('דף הראשי', '<?php print base_url(); ?>images/Main_Page2.png')"
onmouseout="roll_over('דף הראשי', '<?php print base_url(); ?>images/Main_Page1.png')">
<IMG SRC="<?php print base_url(); ?>images/Main_Page1.png" width="100" HEIGHT="50"
NAME="דף הראשי" BORDER="0">
</a>

<a href="<?php echo site_url(); ?>/english" onmouseover="roll_over('English', '<?php print base_url(); ?>images/english2.png')"
onmouseout="roll_over('English', '<?php print base_url(); ?>images/english1.png')">
<IMG SRC="<?php print base_url(); ?>images/english1.png" width="100" HEIGHT="50"
NAME="English" BORDER="0">
</a>


<a href="<?php echo site_url(); ?>/welcome" border="0" alt="עמוד ראשי">
<img src="<?php print base_url(); ?>images/Mini_Logo.png">
</a>
</div>

<?php
if ( isset($status_message) ) {
	print "<div align='center' dir='rtl' style='background: red; width: 945'>";
	print $status_message;
	print "</div>";
}
?>