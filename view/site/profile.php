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
                <?php
                if($_SESSION['id_phongban'] == 1)
                {
                echo '<li><i class="fas fa-file-invoice-dollar" style="font-size: 20px;"></i><a href="index.php?controller=accountant">Phòng kế toán</a></li>
                <li><i class="fas fa-list-ul"></i><a href="index.php?controller=qlns">Danh sách nhân viên</a></i></li>';
                }
                else
                {
                echo ' <li><i class="fas fa-user-circle"><a href="#">Quản Lý Nhân Sự</a></i></li>
                <li><i class="fas fa-building"><a href="#">Quản Lý Phòng Ban</a></i></li>';
                }
                ?>
                </ul>
            </div>            
            <!--Thông tin nhân viên-->
            <div class="main__box-left">
                <h4>Tổng Nguời Dùng</h4>
                <div class="box-number-1"><?php echo $amountPB; ?></div>
                <h4>Đang Online</h4>
                <div class="box-number-1"> 0 </div>
            </div>
         
        </div>
        <!--Cột Phải Article-->
        <div class="col-12">
            <!--Bảng TT Nhân Viên-->
            <div class="main__box-right-profile">
                <div class="main__box-title">
                    <span>Thông Tin Nhân Viên</span>
                </div>
                <div class="main__box-all-profile">
                    <div class="main__box-all-profile-img">
                        <img src="assets/images/profile/nhanvien.jpg" alt="Hình Ảnh Nhân Viên">
                        <span>Hình Ảnh</span>
                    </div>

                    <div class="main__box-all-profile-info">
                        <h2>Thông Tin Cơ Bản</h2>
                            <form action="#" class="info-group">
                                <div class="label-group">
                                    <label>Mã Nhân Viên:</label>
                                    <br>
                                    <br>
                                    <label>Tên Nhân Viên:</label>
                                    <br>
                                    <br>
                                    <label>Email:</label>
                                    <br>
                                    <br>
                                    <label>Phòng Ban:</label>
                                    <br>
                                    <br>
                                    <label>Chức Vụ:</label>
                                    <br>
                                    <br>
                                    <label>Ngày Nhận Việc:</label>
                                    <br>
                                    <br>
                                    <label>Lương:</label>
                                    <br>
                                    <br>
                                    <label>Giới Tính:</label>
                                </div>
                                <div class="input-group">
                                    <!--Mã Nhân Viên-->
                                    <input type="text" name="" id="" value="<?php if($info['idPhongBan']==1){echo 'KT'.$info['idNhanVien'];}
                                    else{echo 'NS'.$info['idNhanVien'];}?>">
                                    <!--Tên Nhân Viên-->
                                    <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                    || ($_SESSION['id_phongban']==2)){echo $info['hoten'];} ?>">
                                    <!--Email-->
                                    <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                    || ($_SESSION['id_phongban']==2)){echo $info['email'];} ?>">                                    
                                    <!--Phòng Ban-->
                                    <input type="text" name="" id="" value="<?php if($info['idPhongBan']==1){echo "Phòng kế toán";}else
                                    {echo "Phòng nhân sự";} ?>">
                                    <!--Chức Vụ-->
                                    <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                    || ($_SESSION['id_phongban']==2)){echo $info['tenchucvu'];} ?>">
                                    <!--Ngày Nhận Việc-->
                                    <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                    || ($_SESSION['id_phongban']==2)){echo $info['ngaynhanviec'];} ?>">
                                    <!--Lương-->
                                    <input type="text" name="" id="" value="<?php if($_SESSION['iduser']==$mng['id_nhanvien'] || $_SESSION['id_phongban']==1)
                                    echo $luong['luongcoban'];?>">                                    
                                    <!--Giới Tính-->
                                    <div class="gender" style="padding-top: 15px;">
                                    <?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) || ($_SESSION['id_phongban']==2))
                                    {echo $info['gioitinh'];} ?>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="clear"></div>
                    <div class="main__box-profile-bottom">
                        <h2>Thông Tin Cá Nhân</h2>
                        <form action="#" class="info-group">
                            <div class="label-group">
                                <label>Ngày Sinh</label>
                                <br>
                                <br>
                                <label>Nguyên Quán:</label>
                                <br>
                                <br>
                                <label>Số CMND</label>
                                <br>
                                <br>
                                <label>Nơi Cấp:</label>
                                <br>
                                <br>
                                <label>Dân Tộc:</label>
                                <br>
                                <br>
                                <label>Quốc Tịch:</label>
                                <br>
                                <br>
                                <label>Điện Thoại:</label>
                            </div>
                            <div class="input-group">
                                <!--Ngày Sinh Nhân Viên-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['ngaysinh'];} ?>">
                                <!--Nguyên Quán-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['nguyenquan'];} ?>">
                                <!--Số CMND-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['cmnd'];} ?>">
                                <!--Nơi Cấp-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['noicap'];} ?>">
                                <!--Dân Tộc-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['dantoc'];} ?>">
                                <!--Quốc Tịch-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['quoctich'];} ?>" >
                                <!--Đnện Thoại-->
                                <input type="text" name="" id="" value="<?php if(($_SESSION['id_phongban'])==($info['idPhongBan']) 
                                || ($_SESSION['id_phongban']==2)){echo $info['dienthoai'];} ?>" >                                                                 
                            </div>
                        </form>
                    </div>
                    <!--Quay Về Trang Chủ-->
                    <div class="backhome">
                    <?php if(($_SESSION['iduser']==$mng['id_nhanvien'] && $_SESSION['id_phongban'] == 2) || ($_SESSION['id_phongban']==2
                    && $_SESSION['id_phongban'] != $info['idPhongBan']))
                    {
                        echo '<a href="index.php?controller=edit">Chỉnh Sửa</a>';
                    }
                    ?> 
                        <a href='javascript: history.go(-1)'>Trở lại</<a>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </div>
    </main>
    </div>
    <div class="clear"></div>
    <!--Phần kết thúc - thông tin nhóm và thành viên-->
    <footer>
        <div class="footer__box-info">
        </div>