<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Trang chính</h1>
    <nav>
        <ul>
            <li><a href="trangthemsach.php">Trang thêm sách</a></li>
            <li><a href="trangchinhsuathongtinsach.php">Trang chỉnh sửa thông tin sách</a></li>
        </ul>
    </nav>
  <table class="table"  action="reg.php" method="post">
     
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mảng chứa các sách (dữ liệu mẫu)
            $books = array(
                array('Dế Mèn Phiêu Lưu Ký', 'Tô Hoài'),
                array('Từ Ấy', 'Tố Hữu'),
                array('Làng', 'Kim Lân')
            );

            foreach ($books as $book) {
                $title = $book[0];
                $author = $book[1];
                $editLink = "chinh_sua.php?title=" . urlencode($title); // Liên kết chỉnh sửa
                $deleteLink = "xoa.php?title=" . urlencode($title); // Liên kết xóa

                echo "<tr>";
                echo "<td>$title</td>";
                echo "<td>$author</td>";
                echo "<td><a href=\"$editLink\">Chỉnh sửa</a> | <a href=\"$deleteLink\">Xóa</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
   


</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>