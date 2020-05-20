<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tin tức chi tiết</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<?php
		// 0. Lấy dữ liệu mã ID tin tức về để thực hiện câu lệnh truy vấn
		$id_tin_tuc = $_GET["id"];

		// 1. Chuỗi kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

		// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
		$sql = "
			SELECT *
			FROM tbl_tin_tuc
			WHERE id_tin_tuc='".$id_tin_tuc."'
		";

		// Hướng dẫn check câu lệnh truy vấn viết đúng hay sai
		// echo $sql; exit();
		
		// 3. Thực hiện truy vấn để lấy ra dữ liệu mong muốn
		$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

		// 4. Hiển thị dữ liệu mong muốn
		while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
		// Đẩy đoạn HTML lặp đi lặp lại vào đây
	;?>

	<h3><?php echo $row["tieu_de"];?></h3>
	<p><?php echo $row["mo_ta"];?> </p>
	<p style="text-align: center;">
		<img src="./img/<?php 
		if ($row["anh_minh_hoa"]<>"") {
			echo $row["anh_minh_hoa"];
		} else {
			echo "no-image.png";
		}
		;?>" width="800px" height="auto"></p>
	<p><?php echo $row["noi_dung"];?></p>
	<?php
		}

		// 5. Đóng  kết nối
		mysqli_close($ket_noi);
	;?>
</body>
</html>