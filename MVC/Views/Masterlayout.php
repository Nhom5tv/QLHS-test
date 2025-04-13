<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <title>quản lý hồ sơ sinh viên</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="http://QLHS - test/Public/Picture/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"  href="http://QLHS - test/Public/CSS/layout.css?v=<?php echo time();?>">
    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-school"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">University of Transport and Technology</a>
                </div>
            </div>
            <ul class="sidebar-nav">
               
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#QLTK" aria-expanded="false" aria-controls="QLTK">
                        <i class="fa-solid fa-user"></i>
                        <span>Quản lý tài khoản</span>
                    </a>
                    <ul id="QLTK" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                        <li class="sidebar-item">
                            <a href="http://QLHS - test/ThongTinSinhVien" class="sidebar-link">Profile</a>
                        </li>

                    </ul>
                </li>

               

                <li class="sidebar-item">
                    <a href="http://QLHS - test/DSdiem" class="sidebar-link">
                    <i class="fa-solid fa-medal"></i>
                        <span>Tra cứu kết quả học tập</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="http://QLHS - test/Taichinh" class="sidebar-link">
                        <i class="fa-solid fa-coins"></i>
                        <span>Tài chính và học phí</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#QLHT" aria-expanded="false" aria-controls="QLHT">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Hệ thống đăng ký tín chỉ</span>
                    </a>
                    <ul id="QLHT" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                        <li class="sidebar-item">
                            <a href="http://QLHS - test/SVdktinchi" class="sidebar-link">Đăng ký tín chỉ</a>
                        </li>

                       
                    </ul>
                </li>

                    

                
                
            </ul>
            <!-- ảnh nhẫn menu -->
            <div class="sidebar-footer">
                <a href="http://QLHS - test/Login/logout" class="sidebar-link">
                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                    <span>Đăng xuất</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
        <div class="title">
            
            </div>
            <!-- content -->
            <div class="main-content">
            <?php 
                   include_once './MVC/Views/Pages/'.$data['page'].'.php';
                //    nối chuỗi tên tệp là ./MVC/Views/Pages/ + giá trị của phần tử page trong mảng data + .php
               ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
            const hamBurger = document.querySelector(".toggle-btn");
            hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");});
    </script>
</body>

</html>