<div class = "neopage" style="display: inline-flex;color:#dddddd;background-color: #222222;">
<pre>
<?PHP
$o = shell_exec("neofetch --disable Shell Song Term Model | aha -n");
$oe = preg_split('/-{3,}/', $o);
$lines = explode("\n", trim($oe[0]));
unset($lines[count($lines) - 1]);
$spEnd = "</span>";
array_push($lines, $spEnd);
echo "<div class=\"nfLogo\" style = \"float: left;padding-right:12px; \">";
foreach($lines as $line){
	echo $line;
	echo "\n";

}
echo "</div><div class=\"nfInfo\" style = \"float: left;\">";

print_r($oe[1]);
?>
</div>
</pre>
</div>
