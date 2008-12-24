<script type="text/javascript">
function ASK(url)
{
var l=confirm("האם להיתנתק?")
  if (l==true)
	{
	window.location=url
	}
  else
	{
	}
}
</script>

<div align="center" style="background: yellow; width: 970;" dir="rtl">
	
	ברוך הבא Username
	כסף:<?php print $user_info->money; ?>&nbsp;|&nbsp;
	בריאות:<?php print $user_info->health; ?>
		
	<a onclick='ASK("<?php echo site_url(); ?>/login/logout");return false;' href='#'>
	<b>התנתקות</b></a>
</div>
