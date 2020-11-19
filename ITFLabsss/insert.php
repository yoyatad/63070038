<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'bergbase.mysql.database.azure.com', 'bergbase@bergbase', 'Natapon45', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
<?php
include 'yee.php';
?>
<html>
<head>
<style>
.container { 
  height: 200px;
  position: relative;
  border: 3px solid green; 
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>
  <body>
  <div class="container">
    <div class="center">
      <p>คุณกรอกข้อมูลสำเร็จแล้ว โปรดกดที่ปุ่มสีฟ้าเพื่อกลับสู่หน้าหลัก</p>
      <br></br>
        <div class="center">
          <br></br>
          <td><a href="index.php">
              <button type="submit" class="btn btn-primary">กลับ</button></td>
</div>
</div>
</div>
</body>
</html>