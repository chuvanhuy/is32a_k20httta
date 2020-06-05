<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra lấy dữ liệu thu được từ FORM chuyển sang
	$email = $_POST["txtEmail"];
	$mat_khau = $_POST["txtMatKhau"];

	// 3. Viết câu lệnh SQL để thêm mới tin tức vào CSDL
	$sql = "
		SELECT * 
		FROM tbl_nguoi_dung
		WHERE email='".$email."' AND mat_khau = '".md5($mat_khau)."'
	";

	// 4. Thực hiện truy vấn để thêm mới tức trên
	$kqdangnhap = mysqli_query($ket_noi, $sql);
	$sobanghi = mysqli_num_rows($kqdangnhap);
	// var_dump($kqdangnhap); exit();

	//5.  Điều hướng người đăng nhập hệ thống
	if($sobanghi == 0) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đăng nhập không thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './dang_nhap.php'
			</script>
		";
	} else {
		session_start();

		$_SESSION['email'] = $email;
		$_SESSION['quyen_han'] = '1';

		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã đăng nhập hệ thống thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_tin_tuc.php'
			</script>
		";
	}