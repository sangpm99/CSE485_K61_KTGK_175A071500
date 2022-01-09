<?php
    include_once("./src/header.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="px-2 py-2 text-secondary text-center">HỆ THỐNG QUẢN LÝ THƯ VIỆN</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4">
                    <a href="./src/detail.php" class="bg-primary px-2 py-2 text-white text-decoration-none shadow">CHI TIẾT</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã độc giả</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Năm sinh</th>
                                <th scope="col">Nghề nghiệp</th>
                                <th scope="col">Ngày cấp thẻ</th>
                                <th scope="col">Ngày hết hạn</th>
                                <th scope="col">Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                include("define.php");
                                include("config.php");
                                $sql = "SELECT * FROM docgia";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; $i++ ?></th>
                                <td><?php echo $row['madg'] ;?></td>
                                <td><?php echo $row['hovaten'] ;?></td>
                                <td><?php echo $row['gioitinh'] ;?></td>
                                <td><?php echo $row['namsinh'] ;?></td>
                                <td><?php echo $row['nghenghiep'] ;?></td>
                                <td><?php echo $row['ngaycapthe'] ;?></td>
                                <td><?php echo $row['ngayhethan'] ;?></td>
                                <td><?php echo $row['diachi'] ;?></td>
                            </tr>
                            <?php
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("./src/footer.php");
?>