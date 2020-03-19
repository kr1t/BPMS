<?php
function genUser($id)
{
    $year = '63';
    $label1 = "01";
    $label2 = "02";
    $num = str_pad($id, 4, "0", STR_PAD_LEFT);
    return $year . $label1 . $label2 . $num;
}