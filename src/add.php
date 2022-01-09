<?php
    include_once("./header_admin.php");
    include_once("../define.php");
    include_once("../config.php");
?>
    <div class="row main mx-5 my-5">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-danger text-center">THÊM ĐỘC GIẢ</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Tên độc giả</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="Nguyễn Văn A">
                        </div>
                        <div class="mb-3">
                            <label for="sex" class="form-label">Giới tính</label>
                            <input type="text" class="form-control" id="sex" name="sex" required placeholder="Nam">
                        </div>
                        <div class="mb-3">
                            <label for="birth" class="form-label">Năm sinh</label>
                            <input type="number" class="form-control" id="birth" name="birth" required placeholder="2000">
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Nghề nghiệp</label>
                            <input type="text" class="form-control" id="job" name="job" required placeholder="Sinh viên">
                        </div>
                        <div class="mb-3">
                            <label for="date1" class="form-label">Ngày cấp thẻ</label>
                            <input type="date" class="form-control" id="date1" name="date1" required>
                        </div>
                        <div class="mb-3">
                            <label for="date2" class="form-label">Ngày hết hạn</label>
                            <input type="date" class="form-control" id="date2" name="date2" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" name="address" required placeholder="Hà Nội">
                        </div>
                        <button type="sumbit" class="btn btn-success mb-2 text-white" name="btn-add">THÊM MỚI</button>
                    </form>
                    <?php
                        if(isset($_POST['btn-add'])){ //isset là kiểm tra biến có tồn tại hay không
                            $full_name = $_POST['full_name'];
                            $sex = $_POST['sex'];
                            $birth = $_POST['birth'];
                            $job = $_POST['job'];
                            $date1 = $_POST['date1'];
                            $date2 = $_POST['date2'];
                            $address = $_POST['address'];

                            //B2 : Thực hiện truy vấn
                            $sql = "INSERT INTO `docgia` VALUES (NULL, '$full_name', '$sex', '$birth', '$job', '$date1', '$date2', '$address')";
                            $result = mysqli_query($conn,$sql);
                            //B3: Xử lý kết quả nếu mysqli_query thành công trả về true
                            if($result == true){
                                header('location:'.SITEURL.'/src/detail.php');
                            }
                            else{
                                header('location:'.SITEURL.'/src/error.php');
                            }
                        }
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("./footer.php");
?>