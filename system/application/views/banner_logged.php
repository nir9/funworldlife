<script type="text/javascript">
function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
</script>

<div align="center" style="background: yellow; width: 970;" dir="rtl">
	
	ברוך הבא <?php print $user_name; ?>&nbsp;|&nbsp;
	כסף:<?php print $user_info->money; ?>&nbsp;|&nbsp;
	בריאות:<?php print $user_info->health; ?>
		
<a href="<?php echo site_url(); ?>/login/logout" onmouseover="roll_over('התנתקות', '<?php print base_url(); ?>images/logout2.png')"
onmouseout="roll_over('התנתקות', '<?php print base_url(); ?>images/logout1.png')">
<IMG SRC="<?php print base_url(); ?>images/logout1.png" WIDTH="100" HEIGHT="50"
NAME="התנתקות" BORDER="0">
</A>

<a href="<?php echo site_url(); ?>/help" onmouseover="roll_over('עזרה', '<?php print base_url(); ?>images/help2.png')"
onmouseout="roll_over('עזרה', '<?php print base_url(); ?>images/help1.png')">
<IMG SRC="<?php print base_url(); ?>images/help1.png" WIDTH="100" HEIGHT="50"
NAME="עזרה" BORDER="0">
</A>

<a href="<?php echo site_url(); ?>/contactus" onmouseover="roll_over('צורקשר', '<?php print base_url(); ?>images/contact2.png')"
onmouseout="roll_over('צורקשר', '<?php print base_url(); ?>images/contact1.png')">
<IMG SRC="<?php print base_url(); ?>images/contact1.png" width="100" HEIGHT="50"
NAME="צורקשר" BORDER="0">
</a>

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
</div>
