<?php 
	require_once('include/config.php');

	if (isset($_POST['submit'])) {
		$noi_dung = $_POST['content'];

		global $mysqli;
		$sql="INSERT INTO `gui_den`(`noi_dung`) VALUES ('$noi_dung')";
		$mysqli->query($sql);

		if ($mysqli == TRUE) {
			echo 'Đã thêm';
		}else{
			echo 'lỗi mẹ rồi';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THĐ-TX</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<script src="assets/js/auto.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<div class="header">
	<p>CFS</p>
</div>

<div class="container">
	<div class="section">
		<form target="index.php" method="post" >
		  <div class="form-group" contentEditable="true">
		    <textarea id="content" rows="3" name="content" type="text" class="form-control" placeholder="Viết suy nghĩ của bạn vào đây" required></textarea>
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary btn-block">Gửi</button>
		</form>
	</div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>