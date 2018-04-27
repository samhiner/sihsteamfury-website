<html><head><style>
.view {
	display: none;
}
</style></head><body>

<h3>Add text:</h3>
<form method='post'>
	Your Code: <br><input type='text' id='code'><br><br>
	Content: <br><input type='text' id='content'><br><br>
	Font (embed html, font name): <br>
	Note: On Google Fonts, click "select this font" and use the first embed code for the embed html<br><input type='text' id='font'><br><br>
	Font Size: <br><input type='text' id='size'><br><br>
	Text Color (Hex Code): <br><input type='text' id='color'><br><br>
	<input type='submit' value='Submit' name='text'>
</form><br>

<h3>Add image:</h3>
<form method='post'>
	Your Code: <br><input type='text' id='code'><br><br>
	Image: <br><input type='text' id='image'><br><br>
	<input type='submit' value='Submit' name='image'>
</form><br>


</body></html><?php

if (isset($_POST['text'])) {
	$file = fopen($_POST['code'],'a');
	fwrite($file, 'hello');
	fclose($file);
}

?>