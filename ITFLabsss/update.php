<?php
	$conn = mysqli_connect('yoyatad.mysql.database.azure.com', 'yoyatad123@yoyatad', 'Ex1fck56', 'ITFLab');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

	$sql = 'UPDATE guestbooks SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>อัพเดตข้อมูล</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>>
</head>
<body class="bg-dark">
	<div class="container text-dark">
		<div class="col-12 col-lg-8 offset-lg-2">
			<div class="card shadow">
				<div class="card-body">
					<h2 align="center">
					<?php
						if(mysqli_query($conn, $sql)) {
								echo "แก้ไขข้อมูลสำเร็จ";
						}
						else {
							echo "แก้ไขข้อมูลล้มเหลว";
						}
					?>
					</h2>
					<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-info">กลับสู่หน้าหลัก</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
