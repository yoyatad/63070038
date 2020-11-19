<?php
	$conn = mysqli_connect('yoyatad.mysql.database.azure.com', 'yoyatad123@yoyatad', 'Ex1fck56', 'ITFLab');
	$sql = 'DELETE FROM guestbooks WHERE ID = '.$_GET['ID'].'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ลบข้อมูล</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container text-dark">
		<div class="col-12 col-lg-8 offset-lg-2">
			<div class="card shadow">
				<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "ลบข้อมูลสำเร็จ";
							}
							else {
								echo "เกิดข้อผิดพลาดกับข้อมูล";
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
