<!DOCTYPE html>
<html>
<head>
  <title>กรอกข้อมูล</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>กรุณากรอกข้อมูลของท่าน</h2>
  <p>โปรดกรอกข้อมูลลงแบบฟอร์มของเราซะ!!! ไม่มีอะไรน่าสงสัยหรอกน้าาาาา หยอกเย่นๆๆๆๆๆ</p>
  <form action = "insert.php" action="/action_page.php" method = "post" id="CommentForm" class="was-validated">
    <div class="form-group">
      <label for="uname">ชื่อ:</label><br>
      <input type="text" class="form-control" id="idName" placeholder=">>>ชื่อจริง ชื่อเล่น หรือ นามแฝงสุดเท่ของคุณ>>>" name="name" required>
      <div class="valid-feedback">สวย</div>
      <div class="invalid-feedback">ใส่ก่อน...จะรีบไปไหน</div>
    </div>
    <div class="form-group">
      <label for="uname">คำอธิบายเกี่ยวกับตัวคุณ:</label><br>
      <input type="text" class="form-control" id="idComment" placeholder=">>>เขียนมาเถอะ จุ๊บๆ>>>" name="comment" required>
      <div class="valid-feedback">มันต้องอย่างงี้ดิ</div>
      <div class="invalid-feedback">แหนะๆๆ..อย่าเพิ่งมองข้ามสิ</div>
    </div>
    <div class="form-group">
      <label for="uname">ที่อยู่ของเว็บไซต์ที่ชื่นชอบ:</label><br>
      <input type="text" class="form-control" id="idLink" placeholder=">>>ใส่ U r l อะไรก็ได้ที่คุณอยากใส่>>>" name="link" required>
      <div class="valid-feedback">ก็มาดิค้าบบบบ</div>
      <div class="invalid-feedback">มองข้ามหนูทำไมมมมT_T</div>
    </div>
    <button type="submit" class="btn btn-primary">!!!ส่งแบบฟอร์ม คลิกที่นี่!!!</button>
	<a href="index.php">
    <button type="submit" class="btn btn-primary">ไปที่หน้าหลัก
      </button>
    <br></br>
  </form>
</body>
</html>
</div>