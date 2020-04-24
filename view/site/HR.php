
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
                    <!--Start Phòng Ban Nhân Sự-->
                    <div class="main__box-all-profile-personal">
                        <div class="main__box-all-profile-personal-title">
                            <p>PB02 - Phòng Nhân Sự</p>
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
                        foreach($listHR as $list)
                        {
                            echo '<tr>
                                    <td>'.$list['idNhanVien'].'</td>
                                    <td>KT0'.$list['idNhanVien'].'</td>
                                    <td>'.$list['hoten'].'</td>
                                    <td>Phòng Kế Toán</td>
                                    <td>'.$list['tenchucvu'].'</td>
                                    <td>'.$list['ngaynhanviec'].'</td>
                                    <td>'.$list['email'].'</td>
                                    <td>'.$list['dienthoai'].'</td>
                                    <td>
                                        <a href="index.php?controller=profile&id='.$list['idNhanVien'].'">Thông Tin</a>
                                    </td>
                                    </tr>';
                        }
                        ?>      
                        </table>
                    </div>
                    <!--End Phòng Nhân Sự-->
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
