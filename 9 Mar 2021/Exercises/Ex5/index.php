<?php
    $str = "rayy@gmail.com";
    $seachStr = "rayy";
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= $str[$i];
        if ($i == strlen($seachStr) - 1) {
            break;
        }
    }
    echo "Chuỗi cần lấy là: $result";
    ?>