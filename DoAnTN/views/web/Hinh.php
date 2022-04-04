<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinh anh</title>
</head>

<body>
    <div class="" style="margin-top: 1px;">

        <?php
        foreach ($hinh as $hinh) {
            extract($hinh);
            $hinhpath = "upload/" . $HinhAnh_SP;
            if (is_file($hinhpath)) {
                $HinhAnh_SP = "<img src='" . $hinhpath . "' alt=''width='100px' height='100px' style='margin: 2px;'>";
            } else {
                $HinhAnh_SP = 'no photo';
            }
            echo '' . $HinhAnh_SP . '';
        }

        ?>
    </div>
</body>

</html>