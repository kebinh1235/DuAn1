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
                echo ' <li><i class="fas fa-user-circle"><a href="#">Quản Lý Nhân Sự</a></i></li>
                <li><i class="fas fa-building"><a href="#">Quản Lý Phòng Ban</a></i></li>';
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
            <div class="main__box-right">
                <h2>Danh sách đăng nhập gần đây</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Họ Tên</th>
                        <th>Mã Số NV</th>
                        <th>Email</th>
                        <th>Thời Gian</th>
                        <th>Chức Năng</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Trần Anh Đức</td>
                        <td>PNS001</td>
                        <td>ducta03@gmail.com</td>
                        <td>03/08/2020</td>
                        <td>
                            <a href="profile.html">Thông Tin</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    </div>
    <div class="clear"></div>