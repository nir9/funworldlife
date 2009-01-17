<?php
function print_image_map_file($map_file, $images_path = '')
{
	print "#image{\n";
	print "display: block\n;";
	print "width: " . $map_file["width"] . "px;\n";
	print "height: " . $map_file["height"] . "px;\n";
	print "background: url(" . $images_path . $map_file["file"] . ") top left no-repeat;\n";
	print "margin-top: 0px;\n";
	print "}\n\n";
}

function print_image_map_css($map)
{
print "<!--\n";
foreach ($map as $piece)
{
	print "#" . $piece["id"] . " {\n";
	print "float: left;\n";
	print "position: absolute;\n";
	print "margin-left: " . $piece["left"] . "px;\n";
	print "margin-top: " . $piece["top"] . "px;\n";
	print "width: " . $piece["width"] . "px;\n";
	print "height: " . $piece["height"] . "px;\n";
	print "border: 1px dotted white;\n";
	print "}\n\n";
}
print "-->\n";

}

function print_additional_css($additionals)
{
print "<!--\n";
foreach ($additionals as $additional)
{
	print $additional;
	print "\n\n";
}
print "-->\n";
}

function print_image_map_body($map, $additionals)
{
print "<div id='image'>\n";
foreach ($additionals as $additional)
{
	print $additional;
	print "\n";
}

foreach ($map as $piece)
{
	$id = $piece["id"];
	$href = site_url() . "/" . $piece["href"];
	$title = $piece["title"];
	print "<a id='$id' href='$href' title='$title'></a>\n";
}
print "</div>\n";
}
?>
