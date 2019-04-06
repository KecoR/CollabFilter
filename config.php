<?php

    $koneksi = mysqli_connect("localhost", "root", "", "collabfilter");

    if(!$koneksi) {
        echo "Error : ".mysqli_connect_error();
    }

    function allUser($koneksi) {
        $query = "SELECT * FROM user";
        $doQuery = mysqli_query($koneksi, $query);

        return $doQuery;
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

        $rowCount = $result->num_rows;

        if($rowCount > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $total[] = ((1*$row['rating']*100)/5*1);
            }
    
            $rating = array_sum($total)/$user;
        } else {
            $rating = 0;
        }

        return round($rating);
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

    function addUser($koneksi, $username) {
        $query = "INSERT INTO user(id, username) VALUES (null, '$username')";

        if(mysqli_query($koneksi, $query)) {
            return 1;
        }
    }

    function addProduk($koneksi, $name) {
        $query = "INSERT INTO product(id, name_product) VALUES (null, '$name')";

        if(mysqli_query($koneksi, $query)) {
            return 1;
        }
    }

    function allProduct($koneksi) {
        $query = "SELECT * FROM product";
        $doQuery = mysqli_query($koneksi, $query);

        return $doQuery;
    }

    function addPembelian($koneksi, $user, $produk, $beli) {
        $query = "INSERT INTO product_order(`id`, `user_id`, `product_id`, `rating`) VALUES (null, '$user', '$produk', '$beli')";

        if(mysqli_query($koneksi, $query)) {
            return 1;
        }
    }

?>