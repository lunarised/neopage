<!DOCTYPE html>
<html lang='en'>
<head>
<title> System Diagnostics </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>
<body>
<pre>
<div class="logo">
<?PHP
$o = shell_exec("neofetch | aha -n");
$o = str_replace('--------------', '</div><div class=\'nfData\'>', $o);

echo $o;

?>
</div>
</pre>
</body>
</html>
