<div align="center" style="background: yellow; width: 970;" dir="rtl">

	<script>
	function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
   function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
	</script>
<a href="<?php echo site_url(); ?>/login" onmouseover="roll_over('התחברות', '<?php print base_url(); ?>images/login2.png')"
onmouseout="roll_over('התחברות', '<?php print base_url(); ?>images/login1.png')">
<IMG SRC="<?php print base_url(); ?>images/login1.png" WIDTH="100" HEIGHT="50"
NAME="התחברות" BORDER="0">
</A>

<a href="<?php echo site_url(); ?>/register" onmouseover="roll_over('הרשמה', '<?php print base_url(); ?>images/register2.png')"
onmouseout="roll_over('הרשמה', '<?php print base_url(); ?>images/register1.png')">
<IMG SRC="<?php print base_url(); ?>images/register1.png" WIDTH="100" HEIGHT="50"
NAME="הרשמה" BORDER="0">
</A>


</div>