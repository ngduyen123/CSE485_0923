<?php
require 'db/connect.php';

if(isset($_POST['btn-reg'])){
    echo"đã thêm";
    echo"<pre>";
    print_r($_POST);
}
echo"<pre>";
print_r($_POST);
$id = $_POST['id'];
$tenTacGia = $_POST['tenTacGia'];

if(!empty($id)&&!empty($tenTacGia)){
    echo"<pre>";
    print_r($_POST);
    $sql = "INSERT INTO `tacgia`(`id`,`tenTacGia`)VALUE(`$id`, `$tenTacGia`) ";

    if($conn->query($sql)===TRUE){
        echo "Lưu dữ liệu thành công";
    }else{
        echo"Lỗi{$sql} .$conn->error";
    }
}else{
    echo"Hãy nhập thông tin trước khi lưu";
}
?>
<br>
<a href = "/GD/index.php">Quay lại trang chủ</a>

