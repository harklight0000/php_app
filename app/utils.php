<?php 
function toVnShort($value) {
    $n = abs((float)$value);
    $suffix = "";
    $num = $value;

    if ($n < 1000) {
        return (string)$value;
    } elseif ($n < 1000000) {
        $num = $value / 1000.0;
        $suffix = "k";
    } elseif ($n < 1000000000) {
        $num = $value / 1000000.0;
        $suffix = "tr";
    } else {
        $num = $value / 1000000000.0;
        $suffix = "tỷ";
    }


    $formatted = number_format($num, 1, '.', '');


    if (substr($formatted, -2) === '.0') {
        $formatted = substr($formatted, 0, -2);
    }

    return $formatted . $suffix;
}

?>