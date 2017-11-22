<?php

$data_edit1=$this->arrAdayroi;
if (isset($_POST['id_get'])) {
    $id=(int)$_POST['id_get'];
    $arr_coupon=$data_edit1[$id]["coupons"];
    echo $data_edit1[$id]["aff_link"]."<br/>";
    if (!empty($arr_coupon)) {

        foreach ($arr_coupon as $key => $value) {
            foreach ($value as $key1 => $value1) {
                echo $value1."<br/>";
            }
        }
    }
}
?>
