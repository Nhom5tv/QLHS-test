<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý Điểm Học Tập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://QLHS - test/Public/CSS/button.css">
    <link rel="stylesheet" type="text/css" href="http://QLHS - test/Public/CSS/styleDT.css?v=<?php echo time();?>">

    <style>
        .btn_cn {
            display: flex;
            margin: 0;
        }
    </style>
</head>

<body>
    <main class="table">
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã học phần</th>
                        <th>Tên học phần</th>
                        <th>Số tín chỉ</th>
                        <th>Lần học</th>
                        <th>Lần thi</th>
                        <th>Điểm hệ 10</th>
                        <th>Điểm hệ 4</th>
                        <th>Điểm chữ</th>
                        <th>Đánh giá</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) {
                        while ($row = mysqli_fetch_assoc($data['dulieu'])) {
                            ?>
                            <tr>
                                <td><?php echo $stt++; ?></td>
                                <td><?php echo $row['ma_mon']; ?></td>
                                <td><?php echo $row['ten_mon']; ?></td>
                                <td><?php echo $row['so_tin_chi']; ?></td>
                                <td><?php echo $row['lan_hoc']; ?></td>
                                <td><?php echo $row['lan_thi']; ?></td>
                                <td><?php echo $row['diem_he_10']; ?></td>
                                <td><?php echo $row['diem_he_4']; ?></td>
                                <td><?php echo $row['diem_chu']; ?></td>
                                <td><?php echo $row['danh_gia']; ?></td>
                                <td>
                                  <a></a>  
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>