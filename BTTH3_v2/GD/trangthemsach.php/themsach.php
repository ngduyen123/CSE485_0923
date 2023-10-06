<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang thêm sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row"
            <div claa="col-6 offset-md-3">
                <form id="form_reg" class="bg-light p-4 my-3" action="reg.php" method="post"
                   <h2 class="py-3 text-center text-uppercase"><center>Thêm Sách</center></h2>
                   <div class="form-group">
                       <lable for="id">id</lable>
                       <input type="int" name="id"class="form-control" id="id">
                   </div>
                   <div class="form-group">
                       <lable for="tenSach">Tên sách</lable>
                       <input type="text" name="tenSach"class="form-control" id="tenSach">
                   </div>
                   <div class="form-group">
                       <lable for="namXuatBan">Năm xuất bản</lable>
                       <input type="int" name="naXuatBan"class="form-control" id="namXuatBan">
                   </div>
                   <div class="form-group">
                       <lable for="idTacGia">Tên sách</lable>
                       <input type="int" name="idTacGia"class="form-control" id="idTacGia">
                   </div>
                   <input type="submit" class="btn bt-primary btn-block mt-4" name="btn-reg" value="Thêm">
                </form>
            </div>
         </div>
     </div>
     <br>
<a href="index.php">Quay lại trang chủ</a>
</body>
</html>
                   

                   