<?php 

    if (isset($_GET['total'])) {
        $total = $_GET['total'];
        echo $total;

        echo '<br>';

        echo idorder();

        echo '<br>';

        InsertOrder(idorder(),$_SESSION['idpelanggan'],'2077-6-7',$total);

    }

function idorder(){
    global $db;
    $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC";
    $jumlah = $db->rowCOUNT($sql);
    if ($jumlah == 0) {
        $id = 1;
    }else {
        $item = $db->getITEM($sql);
        $id = $item['idorder']+1;
    }

    return $id;


}

function InsertOrder($idorder, $idpelanggan, $tgl, $total){
    global $db;

    $sql = "INSERT INTO tblorder VALUES ($idorder, $idpelanggan, $tgl, $total,0,0,0)";

    // echo $sql;

    $db->runSQL($sql);

}

?>