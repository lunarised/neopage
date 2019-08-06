<!DOCTYPE html>
<html lang='en'>
<head>
<title> System Diagnostics </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>
<body>
<pre>
<?PHP
$o = shell_exec("neofetch | aha -n");
$oe = preg_split('/-{3,}/', $o);
$lines = explode("\n", trim($oe[0]));
unset($lines[count($lines) - 1]);
$spEnd = "</span>";
array_push($lines, $spEnd);
echo "<div class=\"nfLogo\">";
foreach($lines as $line){
	echo $line;
	echo "\n";

}
echo "</div><div class=\"nfInfo\">";

print_r($oe[1]);
?>
</div>
</pre>
</body>
</html>
