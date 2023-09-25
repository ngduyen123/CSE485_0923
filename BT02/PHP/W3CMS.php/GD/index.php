<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        body{
           margin: 0;
           padding: 0;
         }
         .position{
            right: 10px;
            top: 15px;

         }
        .wrapper{
            border: 1px solid #000;
            height:auto;
            width: 90%;
            margin: 0 auto;
        }
        .header{
            border: 1px solid #000;
            height: 130px;
            width: 100%;
            text-align : left;
            font-size: 30px;
        }
        #main{
            border: 1px solid #392581;
            height: 400px;
            width: 100%;
        }
        .sidebar{
             border: 1px solid #9ad80a;
            height: 390px;
             width: 20%;
            margin-top: 5px;
           margin-left: 5px;
            float: left;
        }
        .maincontent{
            border: 1px solid #0d0b6e;
            height: 390px;
            width: 78%;
            margin-top:5px ;
            margin-left: 10px;
            float: right;
         }
        .menu{
            border: 1px solid #000;
            height: 50px;
            width: 100%;
           padding-left: 10px;
        }
        .footer{
             border: 1px solid #000;
             height: 150px;
             width: 100%;
             
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <i class="bi bi-menu-button"></i>
            <p><b>Dashboard</b></p>
          <div class="position"> 
            <button type="submit"><i class="fa fa-search"></i></button>
           <input type="text" placeholder="Search.." name="search">
        </div>
    </div>
        <div id="main">
            <div class="sidebar">
            <img src="sidebar.png" alt="">
            </div>
            <div class="maincontent">
            <div class="actions">
                    <a href = "user_add.php" class="btn btn-primary" role="button"><i class="bi bi-person-fill-add"></i> Thêm người dùng mới</a>
                    <a class="btn btn-primary" role="button"><i class="bi bi-trash"></i> Xóa người dùng</a>
                </div>
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Datetime</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i = 1; $i <= 10; $i++){ ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td>Mark</td>
                                <td>@mdo</td>
                                <td>12345</td>
                                <td>16/12/2005</td>
                                <td>
                                    <a href="#"><i class="bi bi-eye-fill"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="bi bi-pencil"></i></a>
                                </td>
                                <td>
                                    <a href="#"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
        <div class="clear"></div>
        <div class="menu">
            <img src="anh1.png">
            <img src="anh2.png">
            <img src="anh3.png">

        </div>
        <div class="footer">
                <input  type="radio" name="lm" >
                <label>last month</label>
                 <input type="radio" name="tm"  checked>
               <label>this month </label>
               
        </div>
    </div>
</body>
</html>