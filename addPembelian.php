<div>
    <h2>Tambah Pembelian</h2>
    <table>
        <form method="POST">
            <table>
                <tr>
                    <td>User</td>
                    <td>:</td>
                    <td>
                        <select name="user">
                            <?php
                                $allUser = allUser($koneksi);
                                while($result  = mysqli_fetch_assoc($allUser)) {
                            ?>
                            <option value="<?= $result['id'] ?>"><?= $result['username'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Produk</td>
                    <td>:</td>
                    <td>
                        <select name="product">
                            <?php
                                $allProduct = allProduct($koneksi);
                                while($result  = mysqli_fetch_assoc($allProduct)) {
                            ?>
                            <option value="<?= $result['id'] ?>"><?= $result['name_product'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td>
                        <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input style="padding:0 25; margin-top:10;" type="submit" name="simpan" value="Submit"></td>
                </tr>
            </table>
        </form>
    </table>
</div>

<?php
    if(isset($_POST['simpan'])) {
        $user    = $_POST['user'];
        $product = $_POST['product'];
        $rating  = $_POST['rating'];

        addPembelian($koneksi, $user, $product, $rating);

        if(1) {
            header("location:/index.php");
        }
    }
?>