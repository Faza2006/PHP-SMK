    <h3>Insert kategori</h3>

    <div class="form-group">
        <form action="" method="post">
            <div class="form-group w-50 mt-2">
                <label class="mb-1" for="">Nama kategori</label>
                <input type="text" name="kategori" required placeholder="isi kategori" class="form-control mt-2">
            </div>

            <div>
                <input type="submit" name="simpan" value="simpan" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>

    <?php 

    if (isset($_POST['simpan'])) {
        $kategori = $_POST ['kategori'];

        $sql= "INSERT INTO tblkategori VALUES('','$kategori')";
        
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
    }

    ?>