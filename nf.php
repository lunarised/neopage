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
$oe = explode('--------------- ', $o);
$lines = explode("\n", trim($oe[0]));
unset($lines[count($lines) - 1]);
$spEnd = "</span>";
array_push($lines, $spEnd);
foreach($lines as $line){
	echo $line;
	echo "\n";
}

print_r($oe[1]);
?>
</div>
</pre>
</body>
</html>
