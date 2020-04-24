<div class="clear"></div>
    <!--Phần nội dung chính-->
    <div class="container">
    <main>
        <!--Cột Trái-->
        <div class="col-4">
            <!--Danh sách phòng ban-->
            <div class="main__box-left">
                <!--Tiêu đề-->
                <div class="main__box-title">
                    <span>Bảng Điều Khiển</span>
                </div>
                <ul>
                <li><i class="fas fa-check" style="padding: 30px 10px 0 30px; font-size: 20px;"></i><a href="index.php?controller=kiemduyet">Kiểm duyệt</a></i></li>
                </ul>
            </div>            
            <!--Thông tin nhân viên-->
            <div class="main__box-left">
                <h4>Tổng Nguời Dùng</h4>
                <div class="box-number-1"><?php echo $amountMB; ?></div>
                <h4>Đang Online</h4>
                <div class="box-number-1">0</div>
            </div>
         
        </div>
        <!--Cột Phải Article-->
        <div class="col-12">
            <!--Bảng Phòng Ban-->
            <div class="main__box-right-department">
                <div class="main__box-title">
                    <span>Phòng Ban Công Ty</span>
                </div>
                <!--Start 2 Phòng Ban-->
                <div class="main__box-all-department">
                    <div class="main__box-all-department-content">
                    <a href="index.php?controller=accountant">Phòng Ban Kế Toán</a>   
                    </div>
                    <div class="main__box-all-department-content">
                        <a href="index.php?controller=HR">Phòng Ban Nhân Sự</a>
                    </div>
            <!--Quay về-->
            <div class="backhome-qlnhansu">
                <a href="HR_truongphong.html">Quay Về</a>
            </div>    
                </div>
            <!--End 2 Phòng Ban-->
            </div>
            <div class="clear"></div>
        </div>
    </main>
    </div>
    <div class="clear"></div>
    <!--Phần kết thúc - thông tin nhóm và thành viên-->
