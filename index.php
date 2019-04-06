<?php

    // error_reporting(0);
    include "config.php";

?>

<html>
    <head>
        <title>Collab Filtering</title>
    </head>
    <body>
        <!-- <form method="post"> -->
            <?php 
                $allUser = allUser($koneksi);
                while($result  = mysqli_fetch_assoc($allUser)) {
            ?>
            
            <button><a style="text-decoration: none; color:black;" href="?user=<?= $result['id'] ?>"><?= $result['username'] ?></a></button>
            <?php
                }
            ?>
            <hr>
            <button><a style="text-decoration: none; color:black;" href="?user=addUser">Tambah User</a></button>
            <button><a style="text-decoration: none; color:black;" href="?user=addProduk">Tambah Produk</a></button>
            <button><a style="text-decoration: none; color:black;" href="?user=addPembelian">Tambah Pembelian</a></button>
        <!-- </form> -->

        <div>
            <?php
                $page = $_GET['user'];
                // if(isset($page)) {
                //     $id = $page;
                //     include "user.php";
                // } elseif (isset($page) == "addUser") {
                //     echo "Add User";
                // }
                if ($page == "addUser") {
                    include "addUser.php";
                } elseif ($page == "addProduk") {
                    include "addProduk.php";
                } elseif ($page == "addPembelian") {
                    include "addPembelian.php";
                } elseif ($page == null) {
                    
                } else {
                    $id = $page;
                    include "user.php";
                }
            ?>
        </div>
    </body>
</html>