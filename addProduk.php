<div>
    <h2>Tambah Produk</h2>
    <table>
        <form method="POST">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type="text" name="name_product"></td>
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
        $name_product = $_POST['name_product'];

        addProduk($koneksi, $name_product);

        if(1) {
            header("location:index.php");
        }
    }
?>