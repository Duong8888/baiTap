<?php
$deThi = [
    "1" => "Đề thi số 1",
    "2" => "Đề thi số 2",
    "3" => "Đề thi số 3",
    "4" => "Đề thi số 4"
];

$sinhVien = [
    [
        "mahv" => "PH23539",
        "ten" => "Nguyễn Ánh Dương 1",
        "lop" => "we17312",
        "email" => "duongna1603@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 2",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 3",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 4",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 5",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 6",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 7",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 8",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 9",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 10",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 11",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 12",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ],
    [
        "mahv" => "PH23538",
        "ten" => "Nguyễn Ánh Dương 13",
        "lop" => "we17312",
        "email" => "hello@gmail.com",
        "sdt" => "0869935501"
    ]
];
// khởi tạo mảng mới lưu mã đề và thông tin sinh viên
$arrSinhVienNew = [];
function phatDe()
{
    global $arrSinhVienNew;
    global $sinhVien;
    global $deThi;
    $soSinhVien = count($sinhVien);
    $soDeThi = count($deThi);
// dùng hàn floor làm tròn xuốn để tính ra trung bình số học sinh của mỗi đề thi
    $trungBinh = floor($soSinhVien / $soDeThi);
// lấy số dư bằng phép chia dư
    $soDu = $soSinhVien % $soDeThi;
// mảng vị trí phần tử lấy ra
    echo 'trung binh = ' . $trungBinh . ' Dư = ' . $soDu . ' số sinh viên = ' . $soSinhVien;
    echo "<hr>";
    shuffle($sinhVien);
    foreach ($deThi as $key => $value) {
        if ($soDu > 0) {
            $hienThi = $trungBinh + 1;
            echo $value . ' có ' . $hienThi . ' sinh viên <br>';
            $soDu--;
            // hàm lấy ngẫu nhiên số phần tử của mảng
            $arrNew = array_rand($sinhVien, $hienThi);
            // Duyệt mảng xóa các phần tử đã lấy được để tránh trùng lặp
            foreach ($arrNew as $valueIndex) {
                $sinhVien[$valueIndex]['deThi'] = $value;
                $arrSinhVienNew[] = $sinhVien[$valueIndex];
                unset($sinhVien[$valueIndex]);
            }
        } else {
            echo $value . ' có ' . $trungBinh . ' sinh viên <br>';
            // hàm lấy ngẫu nhiên số phần tử của mảng
            $arrNew = [];
            if ($trungBinh == 1) {
                $arrNew[] = array_rand($sinhVien, $trungBinh);
            } else {
                $arrNew = array_rand($sinhVien, $trungBinh);
            }
            // Duyệt mảng xóa các phần tử đã lấy được để tránh trùng lặp
            foreach ($arrNew as $valueIndex) {
                $sinhVien[$valueIndex]['deThi'] = $value;
                $arrSinhVienNew[] = $sinhVien[$valueIndex];
                unset($sinhVien[$valueIndex]);
            }
        }
    }
    shuffle($arrSinhVienNew);
}

if (isset($_POST['phatde'])) {
    phatDe();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="box m-auto w-75">
    <!--gọi lại chính file này để thực thi phát đề-->
    <form action="bai2.php" method="post">
        <button type="submit" class="btn btn-primary mt-5" name="phatde">Phát Đề</button>
    </form>
    <table class="table table-hover w-100 m-auto">

        <?php if (!isset($_POST['phatde'])) { ?>
            <tr>
                <th>Mã học viên</th>
                <th>Họ và tên</th>
                <th>Lớp</th>
                <th>Email</th>
                <th>Số điện thoại</th>
            </tr>
            <?php foreach ($sinhVien as $key => $value) { ?>
                <tr>
                    <td><?= $value['mahv'] ?></td>
                    <td><?= $value['ten'] ?></td>
                    <td><?= $value['lop'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['sdt'] ?></td>
                </tr>
            <?php }
        } else { ?>
            <tr>
                <th>Mã học viên</th>
                <th>Họ và tên</th>
                <th>Lớp</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Mã đề thi</th>
            </tr>
            <?php foreach ($arrSinhVienNew as $key => $value) { ?>
                <tr>
                    <td><?= $value['mahv'] ?></td>
                    <td><?= $value['ten'] ?></td>
                    <td><?= $value['lop'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['sdt'] ?></td>
                    <td><?= $value['deThi'] ?></td>
                </tr>
            <?php }
        } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
