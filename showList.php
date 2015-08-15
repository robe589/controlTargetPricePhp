<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>リストに追加</title>
</head>
<body>
<table border="1">
<?php
$fp=fopen("settingTargetPriceList.csv","r");
while($data =fgetcsv($fp,10000)){
	print"<tr>";
	foreach ($data as $d){
		print "<td>$d</td>";
	}
	print "</tr>\n";
}
?>
</table>
</body>
</html>
