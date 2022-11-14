<?php

 include "dao/binh_luan.php";
 include "dao/pdo.php";

 if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) 
    {
        case 'binh_luan':
            $list_bl = insert_binhluan(0);
            include "binh-luan/list.php";
            break;
    
        case 'delete__bl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $list_bl = insert_binhluan();
            include "binh-luan/list.php";
            break;
    }

}
 

