<h3>Registrasi Pelanggan</h3>

<div class="form-group">

<form action="" method="post">
<div class="form-group w-50">
        <label for="">Pelanggan</label>
        <input type="text" name="Pelanggan" required placeholder="isi pelanggan" class="form-control">
    </div>

    <div class="form-group w-50 mt-4 mb-4">
        <label for="">Alamat</label>
        <input type="text" name="Alamat" required placeholder="isi alamat" class="form-control">
    </div>
    
    <div class="form-group w-50 mt-4 mb-4">
        <label for="">Telp</label>
        <input type="text" name="Telp" required placeholder="isi telp" class="form-control">
    </div>

<div class="form-group w-50 mt-4 mb-4">
    <label for="">Email</label>
    <input type="email" name="email" required placeholder="email" class="form-control">
    </div>

<div class="form-group w-50 mt-4 mb-4">
    <label for="">Password</label>
    <input type="password" name="password" required placeholder="password" class="form-control">
    </div>

<div class="form-group w-50 mt-4 mb-4">
    <label for="">Konfirmasi Password</label>
    <input type="password" name="konfirmasi" required placeholder="password" class="form-control">
    </div>

    </select>
    </div>

    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>
    </form>
</div>

<div class="mx-auto">
<?php 

if (isset($_POST['simpan'])) {
    $pelanggan = $_POST ['Pelanggan'];
    $alamat = $_POST ['Alamat'];
    $telp = $_POST ['Telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password === $konfirmasi) {
        $sql= "INSERT INTO tblpelanggan VALUES('','$pelanggan','$alamat','$telp','$email','$password',1)";
        // echo $sql;

        $db->runSQL($sql);

        header("location:?f=home&m=info");
    }else {
        echo "<h3>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h3>";
    }

}

?>
</div>