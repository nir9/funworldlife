<script type="text/javascript">
function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
</script>

<div align="center" style="background: yellow; width: 970;" dir="rtl">
	
	ברוך הבא Username
	כסף:<?php print $user_info->money; ?>&nbsp;|&nbsp;
	בריאות:<?php print $user_info->health; ?>
		
<a href="<?php echo site_url(); ?>/login/logout" onmouseover="roll_over('התנתקות', '<?php print base_url(); ?>images/logout2.png')"
onmouseout="roll_over('התנתקות', '<?php print base_url(); ?>images/logout1.png')">
<IMG SRC="<?php print base_url(); ?>images/logout1.png" WIDTH="100" HEIGHT="50"
NAME="התנתקות" BORDER="0">
</A>
</div>
