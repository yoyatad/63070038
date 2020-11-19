<?php
	$conn = mysqli_init();
	mysqli_real_connect($conn, 'yoyatad.mysql.database.azure.com', 'yoyatad123@yoyatad', 'Ex1fck56', 'ITFLab', 3306);
	if(mysqli_connect_errno($conn)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$sql = "INSERT INTO guestbooks (Name, Comment, Link) VALUES ('$name', '$comment', '$link')";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ยืนยันการเพิ่มข้อมูล</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>>
</head>
<body>
	<div class="container text-dark">
		<div class="col-12 col-lg-8 offset-lg-2">
			<div class="card shadow">
				<div class="card-body">
					<h2 align="center">
					<?php
						if(mysqli_query($conn, $sql)) {
							echo "บันทึกข้อมูลเสร็จสิ้น";
						}
						else {
							echo "บันทึกล้มเหลว";
						}
					?>
					</h2>
					<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
