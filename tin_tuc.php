<html>
	<head>
		<meta charset="utf-8">
		<title>Tin tức tổng hợp</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>

	<body>
		<h1 style="color: red;">Chào mừng bạn đến với Website K20HTTTA</h1>
		<h3>
			<a href=".\index.html">Trang chủ</a> | <a href=".\gioi_thieu.html">Giới thiệu</a> | <a href=".\tin_tuc.html">Tin tức</a> | <a href=".\san_pham.html">Sản phẩm</a></a> | <a href=".\lien_he.html">Liên hệ</a>
		</h3>
		<br><br>

		<div style="float: left; width: 700px;">
			TIN TỨC		

			<?php 
				// 1. Chuỗi kết nối đến CSDL
				$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

				// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
				$sql = "
					SELECT *
					FROM tbl_tin_tuc
					ORDER BY id_tin_tuc DESC
				";
				
				// 3. Thực hiện truy vấn để lấy ra dữ liệu mong muốn
				$noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

				// 4. Hiển thị dữ liệu mong muốn
				while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
				// Đẩy đoạn HTML lặp đi lặp lại vào đây
			;?>
			<h4><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id_tin_tuc"];?>"><font color="red"><?php echo $row["tieu_de"];?></font></a></h4>
			<table>
				<tr>
					<td>
						<img src="./img/<?php 
						if ($row["anh_minh_hoa"]<>"") {
							echo $row["anh_minh_hoa"];
						} else {
							echo "no-image.png";
						}
						;?>" width="180px" height="auto">
					</td>
					<td style="vertical-align: top;">
						<p><i><?php echo $row["mo_ta"];?></i></p>	
					</td>
				</tr>
			</table>
			<hr>
			<?php
				}

				// 5. Đóng  kết nối
				mysqli_close($ket_noi);
			;?>
		</div>
		<div style="float: left; width: 200px;">
			TIN ĐƯỢC NHIỀU NGƯỜI ĐỌC
			<br>
			<ul>
				<li>Tin số 1</li>
				<li>Tin số 2</li>
				<li>Tin số 3</li>
				<li>Tin số 4</li>
				<li>Tin số 5</li>
			</ul>
		</div>
		
	</body>
</html>