<div>
    <h2>Tambah User</h2>
    <table>
        <form method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
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
        $username = $_POST['username'];

        addUser($koneksi, $username);

        if(1) {
            header("location:index.php");
        }
    }
?>