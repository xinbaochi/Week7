<head>
	<meta charset="UTF-8">
	<title>購物車</title>
	<style>
		.td_align {text-align: right}
	</style>
</head>
<body bgcolor="#aaffdd">
	
</body>
</html>

<?php 
		session_start();

		echo "<table>";

		echo "<tr bgcolor='#55a7ff'>";
		echo "<td>功能</td>";
		echo "<td>編號</td>";
		echo "<td>名稱</td>";
		echo "<td>價格</td>";
		echo "<td>數量</td>";	
		echo "</tr>";

		$flag = ' ';
		$date = strtotime("+7 days", time());
		$total = 0;

		while (list($arr, $value) = each($_COOKIE)) 
		{
			if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) 
			{
				if ($flag) 
				{
					$flag = false;
					$color = "#FF99CC";
				}
				else
				{
					$flag = true;
					$color = "#99FFC";
				}

				echo "<tr bgcolor='" . $color . "'><td>";
				echo "<a href='delete.php?Id=" . $arr . "'>";
				echo "刪除</a></td>";

				$price = 0;
				$quantity = 0;

				while (list($name, $value)=each($_COOKIE[$arr])) 
				{
					echo "<td>" . $value . "</td>";

					if ($name == "price") 
					{
						$price = $value;
					}
					else if ($name == "quantity")
					{
						$quantity = $value;
					}
				}
				$total += $price * $quantity;
			}
				echo "</tr>";
		}	

	echo "<tr bgcolor='#FFFF00' class='td_align'>";
	echo "<td colspan='5'>";	
	echo "總金額 = NT$";	
		 
	echo $total;
	
	echo "元</td>";
	echo "</tr>";
	echo "</table>";

	echo "<br>";
	echo "<a href='list.php'>商品目錄</a></td>";
	echo "&nbsp;";
	echo "&nbsp;";
	echo "<a href='shoppingcart.php'>檢視購物車</a></td>";
	echo "&nbsp;";
	echo "&nbsp;";
	echo "<a href='result.php'>確定送出</a></td>";
?>