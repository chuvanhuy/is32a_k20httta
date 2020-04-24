<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ K20HTTTA</title>	
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php 
		/* 
		- Tác giả: Đoàn Thanh Huyền
		- Ngày sửa đổi gần nhất: 24/04/2019
		- Phiên bản: v1.1
		*/

		// Đây là câu lệnh in dữ liệu ra màn hình
		echo "XIN CHÀO! ĐÂY LÀ DÒNG MÃ LỆNH PHP ĐẦU TIÊN CỦA TÔI";

		// Đây là câu lệnh in dữ liệu ra màn hình
			# Hàm echo để in
			# Hàm date() để xuất dữ liệu ngày tháng
			# Tham số d: chỉ ngày
			# Tham số m: chỉ tháng
			# Tham số Y: chỉ năm
		echo "<br>"."Hôm là ngày: ".date("d/m/Y");

		// Đây là câu lệnh in dữ liệu ra màn hình câu lệnh print_r
			# Hàm print_r để in
			# Hàm date() để xuất dữ liệu ngày tháng
			# Tham số h: chỉ giờ
			# Tham số i: chỉ phút
			# Tham số s: chỉ giây
			# Tham số a: chỉ AM hoặc PM
		print_r("<br>"."Bây giờ là: ".date("h:i:s a"));

		// Khởi tạo một biến
		$sinhvien = "Trần Kim Dung";

		// Kiểm tra thông tin chi tiết của biến thông qua hàm var_dump()
		echo "<br><br>";
		var_dump($sinhvien);

		// Khởi tạo 1 biến chưa định nghĩa (hay nó ở trạng thái NULL)
		$giangvien;

		// Kiểm tra thông tin chi tiết của biến thông qua hàm var_dump()
		echo "<br><br>";
		var_dump($giangvien);

		// Dùng hàm isset() để check xem 1 biến nào đó đã được khởi tạo và gán giá trị hay chưa?
		echo "<br><br>";
		$giangvien = "Chu Văn Huy";
		if(isset($giangvien)) {
			echo "Biến giangvien đã được gán giá trị";
		} else {
			echo "Biến giangvien chưa được gán giá trị";
		}

		// Dùng hàm empty() để check xem 1 biến nào đó có rỗng hay không?
		echo "<br><br>";
		if(empty($giangvien)) {
			echo "Biến giangvien rỗng";
		} else {
			echo "Biến giangvien không rỗng";
		}

		// Thử so sánh bằng
		echo "<br><br>";
		if ($giangvien != "Đoàn Thanh Huyền") {
			echo "Oh, cô Huyền không dạy lớp mình";
		} else {
			echo "Vui quá. Cô Huyền dạy lớp mình!";
		}

		// Cách 1: viết ĐẨY ĐỦ câu lệnh IF ELSE
		echo "<br><br>";
		if ($giangvien != "Đoàn Thanh Huyền") {
			$ketqua="Oh, cô Huyền không dạy lớp mình";
		} else {
			$ketqua="Vui quá. Cô Huyền dạy lớp mình!";
		}
		echo "Cách 1: ".$ketqua;


		// Cách 2: viết RÚT GỌN câu lệnh IF ELSE
		echo "<br><br>";
		$ketqua = ($giangvien != "Đoàn Thanh Huyền") ? "Oh, cô Huyền không dạy lớp mình" : "Vui quá. Cô Huyền dạy lớp mình!";
		echo "Cách 2: ".$ketqua;

		// Tìm hiểu cách thực hiện vòng lặp FOR
		echo "<br><br>";
		for ($i=1; $i <= 10 ; $i++) { 
			echo "Lần thông báo bằng vòng FOR thứ ".$i."<br>";
		}

		// Tìm hiểu cách thực hiện vòng lặp WHILE
		echo "<br><br>";
		$i = 1;
		while ($i <= 10) {
			echo "Lần thông báo bằng vòng WHILE thứ ".$i."<br>";
			$i++;
		}

		// Khai báo 1 mảng như thế nào?
		$nguoiyeu = array("Mơ", "Mận", "Đào", "Lê", "Huyền");

		// In ra được phần tử đầu tiên (cô thứ nhất)
		echo "<br><br>";
		echo "Cô đầu tiên: ".$nguoiyeu[0];

		// In ra được phần tử cuối cùng (cô hiện giờ)
		echo "<br><br>";
		echo "Cô hiện giờ: ".$nguoiyeu[4];

		// Khai báo 1 mảng
		$xehoi = array(
			"ten" => "Kia Morning",
			"nam_san_xuat" => 2014,
			"gia_tien" => "350.000.000 đ"
		);

		// In ra được các thành phần của mảng
		echo "<br><br>";
		echo $xehoi["ten"];


		// Hàm exit() có tác dụng THOÁT, không thực thi các câu lệnh phía dưới
		exit();
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