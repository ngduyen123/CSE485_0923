<?php
require 'db/connect.php';
if(isset($_POST['btn-reg'])){
    echo"Đã thêm";
    echo"<pre>";
    print_r($_POST);
}
echo"<pre>";
print_r($_POST);
$id = $_POST['id'];
$tenTacGia = $_POST['tenTacGia'];
$id= $_POST['id'];
$tenSach = $_POST['tenSach'];
$namXuatBan = $_POST['namXuatBan'];
$idTacGia = $_POST['idTacGia'];

if(!empty($id)&&!empty($tenTacGia)&&!empty($id)&&!empty($tenSach)&&!empty($namXuatBan)&&!empty($idTacGia)){
    
    //insert du lieu
    echo"<pre>";
    print_r($_POST);
    $sql = "INSERT INTO `sach`(`id`,`tenSach`,`namXuatBan`,`idTacGia`)VALUES('$id','$tenSach','$namXuatBan','$idTacGia')";
    $sql = "INSERT INTO `tacgia`(`id`, `tenTacGia`)VALUES('$id', '$tenTacGia')";

    if($conn->query($sql)===TRUE){
        echo "Lưu dữ liệu thành công";
    }else{
        echo"Lỗi{$sql} .$conn->error";
    }
}else{
    echo"Hãy nhập thông tin";
}
?>
<br>
<a href="index.php">Quay lại trang chủ</a>
<!-- $_POST bien xl du lieu -->
<!-- <pre> hien thi theo hang doc</pre> -->