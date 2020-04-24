<?php
include_once 'model/toPDF.php';
set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new DOMPDF();
if(isset($_GET['idPB']))
    $idPB = $_GET['idPB'];
$luongnhanvien = getluongnhanvien($idPB);
$date = date('Y-m-d');
$html = '';
foreach($luongnhanvien as $luong)
{
    if($luong['idPhongBan']==1)
    {
        $PB = "Phòng Kế Toán";
        $nv = "KT".$luong['idNhanVien'];
    }
    else
    {
        $PB = "Phòng Nhân Sự";
        $nv = "KT".$luong['idNhanVien'];
    }
    $l = number_format($luong['luongcoban']);
    $html = $html.'<tr>
    <td>'.$PB.'</td>
    <td>'.$nv.'</td>
    <td>'.$luong['hoten'].'</td>
    <td>'.$l.'</td>
    <td>'.$luong['bacluong'].'</td>
    <td>'.$luong['hesoluong'].'</td>
    <td>'.$luong['hesophucap'].'</td>
  </tr>';
}
if($idPB==1)
{
  $name = "Bảng Lương Phòng Kế Toán($date)";
}
else
{
  $name = "Bảng Lương Phòng Nhân sự($date)";
}
$dompdf->load_html('
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
*{ font-family: DejaVu Sans; font-size: 14px;}
table {
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>'.$name.'</h2>
<table>
  <tr>
    <th>Tên Phòng Ban</th>
    <th>Mã Nhân Viên</th>
    <th>Tên Nhân Viên</th>
    <th>Lương</th>
    <th>Bậc Lương</th>
    <th>Hệ Số Lương</th>
    <th>Hệ Số Phụ Cấp</th>
  </tr>
  '.$html.'
</table>
</body>
</html>
'); 
$dompdf->render();    
$pdf = $dompdf->output();
if($idPB==1)
{
  $outputname = 'KT('.$date.')';
}
else
{
  $outputname = 'NS('.$date.')';
}
ob_end_clean();
$dompdf->stream($outputname);
exit;
?>
