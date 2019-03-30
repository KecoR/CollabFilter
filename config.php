<?php

    $koneksi = mysqli_connect("localhost", "root", "", "collabfilter");

    if(!$koneksi) {
        echo "Error : ".mysqli_connect_error();
    }

    function user($koneksi) {
        $query = "SELECT COUNT(id)-1 AS user FROM user";
        $doQuery = mysqli_query($koneksi, $query);
        $result = mysqli_fetch_assoc($doQuery);

        $user = $result['user'];

        return $user;
    }

    function rating($id, $koneksi, $user) {
        $query = "SELECT * FROM product_order WHERE product_id = '$id'";
        $result = mysqli_query($koneksi,$query);

        while($row = mysqli_fetch_assoc($result)) {
            $total[] = ((1*$row['rating']*100)/5*1);
        }

        $rating = array_sum($total);

        return $rating/$user;
    }

    function beli($id, $koneksi) {
        $query = "SELECT * FROM user JOIN product_order ON user.id = product_order.user_id JOIN product ON product.id = product_order.product_id WHERE user.id = '$id'";
        $row = mysqli_query($koneksi,$query);

        return $row;
    }

    function rekomendasi($id, $koneksi) {
        $query = "SELECT * FROM product WHERE id NOT IN ( SELECT product_id FROM `product_order` WHERE user_id = $id )";
        $row = mysqli_query($koneksi, $query);

        return $row;
    }

?>