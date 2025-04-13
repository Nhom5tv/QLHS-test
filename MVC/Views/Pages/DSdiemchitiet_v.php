
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://qlhs/Public/CSS/button.css?v=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="http://qlhs/Public/CSS/styleDT.css">
    <style >
        .btn_cn {
            display: flex;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- <form method="post" action="http://qlhs/DSTaikhoan/timkiem"></form> -->
    <main class="table" id="customers_table">
    <section class="table__header">
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>STT <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Lần học <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Lần thi <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Điểm chuyên cần <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Điểm giữa kì <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Điểm cuối kì <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0 ){
                            $i=1;
                            while($row=mysqli_fetch_assoc($data['dulieu'])){  
                    ?>
                                        <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['lan_hoc']; ?></td>
                                        <td><?php echo $row['lan_thi']; ?></td>
                                        <td><?php echo $row['diem_chuyen_can']; ?></td>
                                        <td><?php echo $row['diem_giua_ky']; ?></td>
                                        <td><?php echo $row['diem_cuoi_ky']; ?></td>
                                           
                                           
                                            <?php
                                              
                                                    
?>


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
