<div>
        <h2>Produk yang pernah anda beli</h2>
    <table border="1">
        <tr>
            <th width="100px">Produk</th>
            <th width="75px">Rating</th>
        </tr>
    <?php
    // $user = mysqli_query($koneksi,$p1j);
        $user = beli($id, $koneksi);
        while($row = mysqli_fetch_assoc($user)) {
    ?>

        <tr>
            <td style="text-align:center;"><?= $row['name_product'] ?></td>
            <td style="text-align:center;"><?= $row['rating'] ?></td>
        </tr>

    <?php
        }
    ?>
    </table>
    <h2>Produk Rekomendasi Untuk anda</h2>
    <table border="1">
    <tr>
        <th width="100">Produk</th>
        <th width="175">Nilai Rekomendasi</th>
    </tr>
    <?php
        $rekom = rekomendasi($id,$koneksi);
        $totUser = user($koneksi);
        while($row = mysqli_fetch_assoc($rekom)) {
    ?>
    <tr>
        <td><?= $row['name_product'] ?></td>
        <td>
            <?php
                $id = $row['id'];
                $rating = rating($id, $koneksi, $totUser);

                echo $rating;
            ?>
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
</div>