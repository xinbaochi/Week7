<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<style>
		.form-area {width: 1500px;}
		.select {height: 28px;}
		.input-number {height: 23px; width: 80px;}
		.input-number-area {width: 85px; margin-right: 30px; margin-left: 30px;}
		.button {height: 28px;}
	</style>
</head>
<body bgcolor="#aaffdd">
	
	<div class="form-area">
	<form action="catalog.php" method="post">

		選擇商品:
	
		<select name="item" class="select">
			<option value="S001">無盡之刃 - $3600</option>
			<option value="S002">幻影之舞 - $2550</option>
			<option value="S003">殞落王者之劍 - $3400</option> 
		</select>

		<span class="input-number-area">
			<input type="text" name="quantity" class="input-number" placeholder="商品數量" required>個(
			<font color="blue">*</font>
			必填)
		</span>

		<input type="submit" value="訂購" class="button">

	</form>
	</div>
	<br>
	<hr>

	<a href="list.php">商品目錄</a></td>
	&nbsp;
	&nbsp;
	<a href="shoppingcart.php">檢視購物車</a></td>
	
</body>
</html>