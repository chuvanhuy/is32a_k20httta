<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ K20HTTTA</title>	
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php 
		echo "XIN CHÀO. ĐÂY LÀ DÒNG PHP ĐẦU TIÊN CỦA TÔI.";

		echo "<br>"."Hôm nay là: ".date("Y/m/d H:m:s");
	;?>

	<h1 style="color: red;">Chào mừng bạn đến với Website K20HTTTA</h1>
	<h3>
		<a href=".\index.html">Trang chủ</a> | <a href=".\gioi_thieu.html">Giới thiệu</a> | <a href=".\tin_tuc.html">Tin tức</a> | <a href=".\san_pham.html">Sản phẩm</a></a> | <a href=".\lien_he.html">Liên hệ</a>
	</h3>
	<br><br>
	<div>
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">SỰ KIỆN NỔI BẬT
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
		
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">KHUYẾN MẠI
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
	</div>
	<div style="clear: both;">
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">SẢN PHÂM MỚI
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
		
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">SẢN PHẨM NỔI BẬT
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
	</div>
	<div style="clear: both;">
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">SẢN PHÂM MỚI
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
		
		<div style="float: left; width: 400px; height: 250px; padding: 10px; margin: 10px; border: 1px solid;">SẢN PHẨM NỔI BẬT
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
	</div>
	<div style="clear: both; padding-bottom: 50px;">
		<button type="button" onclick="window.alert('Xin chào!')">Test</button>
	</div>

	<script type="text/javascript">
		var a;
		var c;
		a = "Xin chào";
		b = a + " Bùi Huế";
		// Hiển thị cách 1
		// window.alert(b);
		// Hiển thị cách 2
		document.write(b);
		document.write(c);

		// Khai báo mảng người yêu
		var nguoiyeu;
		nguoiyeu = ["Mơ", "Mận", "Đào", "Chanh", "Xả"];

		// In tên từng cô
		document.write(nguoiyeu[0]); // In ra cô "Mơ"
		document.write(nguoiyeu[3]); // In ra cô "Chanh"

		// In tên của tất cả các cô người yêu ra màn hình
		for (i=0; i<= nguoiyeu.length-1; i++) {
			document.write(nguoiyeu[i]);	// Lần lượt in ra Mơ, Mận, Đào, Chanh, Xả
			// in_gia_tri(nguoiyeu[i]);
		}


		function in_gia_tri(x) {
			window.alert(x);
		}

		// Khai báo đối tượng Ô TÔ với 3 thuộc tính: Kiểu xe, Đời xe, Màu sắc
		var oto={kieu_xe:"Toyota Vios", model:2020, mau_sac:"Vàng cát"};

		// Lấy được thuộc tính kiểu xe; in nó ra màn hình
		document.write(oto.kieu_xe);


	</script>
</body>
</html>