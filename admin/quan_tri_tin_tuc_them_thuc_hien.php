<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20htttb_db");

	// 2. Lấy ra lấy dữ liệu thu được từ FORM chuyển sang
	$tieu_de = $_POST["txtTieuDe"];
	$mo_ta = $_POST["txtMoTa"];
	$noi_dung = $_POST["txtNoiDung"];
	// echo $tieu_de; exit();

	// 3. Viết câu lệnh SQL để thêm mới tin tức vào CSDL
	$sql = "
		INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `id_loai_tin_tuc`, `tieu_de`, `mo_ta`, `anh_minh_hoa`, `noi_dung`, `ghi_chu`) 
		VALUES (NULL, 1, '".$tieu_de."', '".$mo_ta."', '', '".$noi_dung."', NULL); 
	";
	// echo $sql; exit();

	// 4. Thực hiện truy vấn để thêm mới tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm mới bài viết thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_tin_tuc.php'
			</script>
		";
;?>