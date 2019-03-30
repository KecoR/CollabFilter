<?php

    // error_reporting(0);
    include "config.php";

?>

<html>
    <head>
        <title>Collab Filtering</title>
    </head>
    <body>
        <?php
            
            // while($row = mysqli_fetch_assoc($result)) {
            //     $total1[] = ((1*$row['rating']*100)/5*1);
            // }
            // $lastResult1 = (array_sum($total1))/4;

            // $result = mysqli_query($koneksi,$p2);
            // while($row = mysqli_fetch_assoc($result)) {
            //     $total2[] = ((1*$row['rating']*100)/5*1);
            // }
            // $lastResult2 = (array_sum($total2))/4;

            // $result = mysqli_query($koneksi,$p3);
            // while($row = mysqli_fetch_assoc($result)) {
            //     $total3[] = ((1*$row['rating']*100)/5*1);
            // }
            // $lastResult3 = (array_sum($total3))/4;

            // $result = mysqli_query($koneksi,$p4);
            // while($row = mysqli_fetch_assoc($result)) {
            //     $total4[] = ((1*$row['rating']*100)/5*1);
            // }
            // $lastResult4 = (array_sum($total4))/4;

            // $result = mysqli_query($koneksi,$p5);
            // while($row = mysqli_fetch_assoc($result)) {
            //     $total5[] = ((1*$row['rating']*100)/5*1);
            // }
            // $lastResult5 = (array_sum($total5))/4;

            // echo $lastResult1.' '.$lastResult2.' '.$lastResult3.' '.$lastResult4.' '.$lastResult5;
            // $id = 1;
            // $testResult = beli($id);

            // echo $testResult;
        ?>

            <form method="post">
                <input type="submit" value="User 1" name="user1">
                <input type="submit" value="User 2" name="user2">
                <input type="submit" value="User 3" name="user3">
                <input type="submit" value="User 4" name="user4">
                <input type="submit" value="User 5" name="user5">
            </form>

        <div>
            <?php
                $user = user($koneksi);
                if(isset($_POST['user1'])) {
                    include "user/user1.php";
                } elseif (isset($_POST['user2'])) {
                    include "user/user2.php";
                } elseif (isset($_POST['user3'])) {
                    include "user/user3.php";
                } elseif (isset($_POST['user4'])) {
                    include "user/user4.php";
                } elseif (isset($_POST['user5'])) {
                    include "user/user5.php";
                }
            ?>
        </div>
    </body>
</html>