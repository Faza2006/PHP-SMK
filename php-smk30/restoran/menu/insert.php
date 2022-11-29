<h3>Insert Menu</h3>

<div class="form-group">

<form action="" method="post">
<div class="form-group w-50">
    <label for="">Nama menu</label>
    <input type="text" name="menu" required placeholder="isi menu" class="form-control">
    </div>
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>
    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $menu = $_POST ['menu'];

    $sql= "INSERT INTO tblmenu VALUES('','$menu')";
    
    $db->runSQL($sql);
    header("location:?f=menu&m=select");
}

?>