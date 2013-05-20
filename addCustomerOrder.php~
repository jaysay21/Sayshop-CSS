<?php

    include 'Dao/ShopDao.php';

    $cust_name = $_POST['cust_name'];
    $cust_num = $_POST['cust_num'];
    $address = $_POST['address'];
    $prod_n1 = $_POST['prod_n1'];
    $prod_p1 = $_POST['prod_p1'];
    $q1 = $_POST['q1'];
    $date = $_POST['date'];
    $warranty = $_POST['warranty'];

    $action = new ShopDao();
    $action -> addCustomer($cust_name, $cust_num, $address, $prod_n1, $prod_p1, $q1, $date, $warranty);

?>
