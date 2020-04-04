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
            <!--Bảng Phòng Ban-->
            <div class="main__box-right-department">
                <div class="main__box-title">
                    <span>Danh Sách Nhân Viên</span>
                </div>
                <!--Start Phòng Ban Kế Toán-->
                    <div class="main__box-all-profile-personal">
                        <div class="main__box-all-profile-personal-title">
                            <p>PB01 - Phòng Kế Toán</p>
                            <hr>
                        </div>
                        <!--Bảng thông tin nhân viên công ty-->
                        <table>
                            <!--Tiêu Đề-->
                            <tr> 
                            <th>STT</th>                            
                            <th>Mã Nhân Viên</th>
                            <th>Họ Và Tên</th> 
                            <th>Phòng Ban</th>
                            <th>Chức Vụ</th>
                            <th>Ngày Nhận Việc</th>
                            <th>Email</th>
                            <th>Điện Thoại</th>
                            <th>Chi Tiết</th>
                            </tr>
                            <!--Thông Tin Nhân Viên 1-->
                            <?php
                                foreach($AL as $a)
                                {
                                    echo '<tr>
                                    <td>'.$a['idNhanVien'].'</td>
                                    <td>KT0'.$a['idNhanVien'].'</td>
                                    <td>'.$a['hoten'].'</td>
                                    <td>Phòng Kế Toán</td>
                                    <td>'.$a['tenchucvu'].'</td>
                                    <td>'.$a['ngaynhanviec'].'</td>
                                    <td>'.$a['email'].'</td>
                                    <td>'.$a['dienthoai'].'</td>
                                    <td>
                                        <a href="index.php?controller=profile&id='.$a['idNhanVien'].'">Thông Tin</a>
                                    </td>
                                    </tr>';
                                }
                            ?>                                                                                                                              
                        </table>
                    </div>
                    <!--End Phòng Kế Toán-->
            <!--Quay về-->
            <div class="backhome-qlnhansu">
                <a href="HR_qlphongban.html">Quay Về</a>
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
    <footer>
        <div class="footer__box-info">
        </div>
    </footer>
</body>

</html>