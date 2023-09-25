<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body>
    <?php 
        include "layout/header.php";
    ?>
    <div class="row">
        <img class="col-12" src="..img/anhweb1.png" alt="">
    </div>
    <div>
        <center><p class="text-primary">TOP BÀI HÁT YÊU THÍCH</p></center>
    </div>
    <div class="container">
    <div class="row ">
      <div class="col-sm-3 border">
        <a href="detail.php">
          <img src="..img/anhweb2.png" alt="" class="img-fluid">Chuyện tình cây lá và gió
        </a>
      </div>
      <div class="col-sm-3 border">
        <a href="">
          <img src="..img/anhweb4.png" alt="" class="img-fluid">Ơi cuộc sống mến thương
        </a>
      </div> 
      </div>
     </div>
    <?php 
        include "layout/footer.php";
    ?>
</body>
</html>