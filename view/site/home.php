<div class="container">
    <main>
        <div class="col-4">
            <!--Danh sách phòng ban-->
            <div class="main__box-left">
                <!--Tiêu đề-->
                <div class="main__box-title">
                    <span>Bảng Điều Khiển</span>
                </div>
                <ul>
                <?php
                if($_SESSION['id_phongban'] == 1)
                {
                echo '<li><i class="fas fa-file-invoice-dollar" style="font-size: 20px;"></i><a href="index.php?controller=accountant">Phòng kế toán</a></li>
                <li><i class="fas fa-list-ul"></i><a href="index.php?controller=qlns">Danh sách nhân viên</a></i></li>';
                }
                else
                {
                echo '<li><i class="fas fa-check" style="padding: 30px 10px 0 30px; font-size: 20px;"></i><a href="index.php?controller=kiemduyet">Kiểm duyệt</a></i></li>';
                }
                ?>
                </ul>
            </div>            
            <!--Thông tin nhân viên-->
            <div class="main__box-left">
                <h4>Tổng Nguời Dùng</h4>
                <div class="box-number-1"><?php echo $amountMB; ?></div>
                <h4>Đang Online</h4>
                <div class="box-number-1"> 0 </div>
            </div>
         
        </div>
        <div class="col-12">
            <!--Bảng thống kê tổng-->
            <div class="main__box-right">
                <div class="main__box-title">
                    <span>Tổng Quan</span>
                </div>
                <div class="main__box-tongquan">
                    <div class="box-3">
                        <i class="fas fa-users"><span><?php echo $amountMB; ?></span></i>
                        <h2>Nhân Viên</h2>
                    </div>
                    <div class="box-3">
                        <i class="fas fa-building"><span><?php echo $amountPB; ?></span></i>
                        <h2>Phòng Ban</h2>
                    </div>
                    <div class="box-3">
                        <i class="far fa-user"><span>300</span></i>
                        <h2>Đang Online</h2>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!--Bảng danh sách nhân viên-->