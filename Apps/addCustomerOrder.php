<?php

    include 'Dao/ShopDao.php';

    $cust_name = $_POST['cust_name'];
    $cust_num = $_POST['cust_num'];
    $address = $_POST['address'];
    $prod_name = $_POST['prod_name'];
    $prod_p1 = $_POST['prod_p1'];
    $q1 = $_POST['q1'];
    $date = $_POST['date'];
    $warranty = $_POST['warranty'];
    $prod_id =$_POST['prod_id'];
    $action = new ShopDao();
    $action -> addCustomer($cust_name, $cust_num, $address, $prod_name, $q1, $date, $warranty,$prod_id);
?>
