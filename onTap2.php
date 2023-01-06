<?php
//function tinh($a, $b, $c)
//{
//    echo $a + $b + $c;
//}
//
//;
//tinh(1, 2, 3);
//function info($hoTen, $maSv, $diaChi, $namSinh)
//{
//    $date = getdate();
//    $year = $date['year'];
//    $tuoi = $year - $namSinh;
//    echo '
//    <table border="1">
//        <tr>
//            <td>Tên</td>
//            <td>Mã sinh viên</td>
//            <td>Địa chỉ</td>
//            <td>Tuổi</td>
//        </tr>
//        <tr>
//            <td>'.$hoTen.'</td>
//            <td>'.$maSv.'</td>
//            <td>'.$diaChi.'</td>
//            <td>'.$tuoi.'</td>
//        </tr>
//    </table>
//';
//}
//info("Nguyễn Ánh Dương","PH23539","Hà Tây","2003");
function tuoi($namSinh)
{
    return date("Y") - $namSinh;
}

function rank($tongLuong){
    return ($tongLuong >= 6000)?"Đạt":"Không Đạt";
}

function teacher($magv, $tengv, $namisnh, $luongcb, $sogioday)
{
    $age = tuoi($namisnh);
    $tongLuong = $luongcb * $sogioday;
    $xepLoai = rank($tongLuong);
     echo '
    <table border="1">
        <tr>
            <td>Mã Giảng Viên</td>
            <td>Tên Giảng Viên</td>
            <td>Tuổi</td>
            <td>Tổng Lương</td>
            <td>Xếp Loại</td>
        </tr>
        <tr>
            <td>' . $magv . '</td>
            <td>' . $tengv . '</td>
            <td>' . $age . '</td>
            <td>' . $tongLuong . '</td>
            <td>' .$xepLoai.'</td>
        </tr>
    </table>
';
}
teacher("PH23539", "Ánh Dương", 2003, 1000, 200);
