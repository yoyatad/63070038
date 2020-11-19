<!DOCTYPE html>
<html>
<head>
	<title>หน้าหลัก</title>
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
					<div class="row">
						<div class="col-6"><h2 class="text-monospace">ข้อมูลของท่านผู้เจริญ</h2></div>
						<div class="col-6 text-right"><a href="form.php" class="btn btn-warning">เพิ่มรายชื่อ</a></div>
					</div>
					<div class="table-responsive">
						<?php
							$conn = mysqli_init();
							mysqli_real_connect($conn, 'yoyatad.mysql.database.azure.com', 'yoyatad123@yoyatad', 'Ex1fck56', 'ITFLab', 3306);
							if (mysqli_connect_errno($conn))
							{
								die('Failed to connect to MySQL: '.mysqli_connect_error());
							}
							$res = mysqli_query($conn, 'SELECT * FROM guestbooks');
						?>
						<table class="table table-borderless table-striped">
							<thead>
								<tr>
									<th>ชื่อ</th>
									<th>คำอธิบาย</th>
									<th>ที่อยู่เว็บไซต์</th>
									<th width="150px">จัดการ</th>
								</tr>
							</thead>
							<tbody>
								<?php
									while($Result = mysqli_fetch_array($res)) {
								?>
								<tr>
									<td><?php echo $Result['Name'];?></td>
									<td><?php echo $Result['Comment'];?></td>
									<td><?php echo $Result['Link'];?></td>
									<td><a href="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-danger mb-2 mb-md-0">ลบ</a> <a href="edit.php?ID=<?php echo $Result['ID'];?>" class="btn btn-dark">แก้ไข</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<?php
							mysqli_close($conn);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
