<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>リストに追加</title>
	</head>
<body>
<?php
	if ($_SERVER['REQUEST_METHOD'] ==='POST'){
		$stockCode =(int)$_POST['stockCode'];
		$lowerNum =(int)$_POST['lowerNum'];
		$upperNum =(int)$_POST['upperNum'];

		//次のnoを特定
		$no=count(file("settingTargetPriceList.csv"));
		$no+=1;
		echo "銘柄コードは" . $stockCode . "\n";
		echo "目標株価の下限値は" . $lowerNum . "\n";
		echo "目標株価の上限値は" . $upperNum . "\n";
		//csvに書き込み
		$writeData=[$no,$stockCode,$lowerNum,$upperNum];
		$fp = fopen("settingTargetPriceList.csv","a");
		fputcsv($fp,$writeData);
		fclose($fp);	
	}
	?>
	<br>
	<input type="button" value="戻る" onClick="location='index.php'">
</body>
</html>
