<?php
	$conn = mysqli_connect('yoyatad.mysql.database.azure.com', 'yoyatad123@yoyatad', 'Ex1fck56', 'ITFLab');

	$id = $_GET['ID'];

	$sql = 'SELECT * FROM guestbooks WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: index.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>แก้ไขฟอร์ม</title>
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
					<div class="row">
						<div class="col-6"><h1 class="text-monospace">แก้ไขข้อมูล</h1></div>
					</div>
					<form action="update.php" method="post">
						<input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
						<div class="form-group">
							<label>ชื่อ</label>
							<input type="text" name="name" value="<?php echo $data['Name']; ?>" class="form-control" placeholder=">>>แก้อะไรดีน้าาาาาาาาาา>>>" required>
						</div>
						<div class="form-group">
							<label>คำอธิบาย</label>
							<textarea name="comment" class="form-control" rows="5" placeholder=">>>เขียนมาเถอะไม่ต้องคิดมาก>>>" required><?php echo $data['Comment']; ?></textarea>
						</div>
						<div class="form-group">
							<label>ที่อยู่เว็บไซต์</label>
							<input type="text" name="link" value="<?php echo $data['Link']; ?>" class="form-control" placeholder=">>>ฮั่นแน่!!!!!!!!!!!!!>>>">
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
							<a class="btn btn-danger" href="index.php">ยกเลิกการแก้ไข</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
