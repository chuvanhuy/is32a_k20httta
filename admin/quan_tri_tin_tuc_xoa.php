<?php 
	session_start();
	if(!$_SESSION['email']) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không có quyền truy cập.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './dang_nhap.php'
			</script>
		";
	}
;?>
<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra được ID của tin tức cần xóa
	$id_tin_tuc=$_GET["id"];
	// echo $id_tin_tuc; exit();

	// 2. Viết câu lệnh SQL để xóa tin tức có id thu được như trên
	$sql = "
		DELETE
		FROM tbl_tin_tuc
		WHERE id_tin_tuc='".$id_tin_tuc."'
	";

	// 4. Thực hiện truy vấn để xóa tin tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc xóa tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được xóa thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa bài viết thành công.');
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