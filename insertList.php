<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Check username</title>
</head>
<body>
	<form action="addList.php" method="post">
	<table border="0">
		<tr>
			<td align="right"><b> 銘柄コード</b></td>
			<td><input type="text" name="stockCode" value="<?php echo htmlspecialchars($stockCode,ENT_QUOTES,'UTF-8');?>"></td>
			</tr>
		<tr>
			<td align="right"><b> 株価下限値</b></td>
			<td><input type="text" name="lowerNum" value="<?php echo htmlspecialchars($lowerNum,ENT_QUOTES,'UTF-8');?>"></td>
		</tr>
		<tr>
			<td align="right"><b> 株価上限値</b></td>
			<td><input type="text" name="upperNum" value="<?php echo htmlspecialchars($upperNum,ENT_QUOTES,'UTF-8');?>"></td>
		</tr>
		<tr>
		<td></td>
		<td>
		  <input type="submit" value="送信">
		  <input type="reset" value="リセット">
		</td>
		</tr>	
	</table>
	</form>	
</body>
</html>
