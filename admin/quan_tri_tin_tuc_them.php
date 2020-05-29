<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới tin tức</title>
</head>
<body>
	<h1 style="text-align: center; padding-bottom: 20px;">THÊM MỚI TIN TÚC</h1>
	<form method="POST" action="./quan_tri_tin_tuc_them_thuc_hien.php">
		<p>
			Tiêu đề:<br>
			<input type="text" name="txtTieuDe" style="width: 100%;">
		</p>
		<p>
			Mô tả:<br>
			<textarea name="txtMoTa" style="width: 100%;"></textarea>
		</p>
		<p>
			Nội dung:<br>
			<textarea name="txtNoiDung" style="width: 100%;"></textarea>
		</p>
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>