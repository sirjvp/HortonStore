<html>
    <head>
    <title>Horton Store</title>
    <link type="text/css" rel="stylesheet" href="layout.css">
    </head>
<body>
    <div id="top">
        <div id="icon">
            <a href="database1.php"><IMG SRC="back.png"></IMG></a>
        </div>
        <div id="logo">
            <img src="logo.png"></img>
        </div>
    </div>
    <div id="add">
    <?php
        if(isset($_POST["update2"])){
        Include "database.php";
        $conn = connect();
        
        $a1 =   rand(1111,9999);
                $a2 = rand(1111,9999);
                $a3 = $a1.$a2;
                $a3 = md5($a3);

                $fnm = $_FILES['pic11']['name'];
                $dst = 'product/'.$a3.$fnm.'.jpg';        //convert to jpg
                $dst1 = 'product/'.$a3.$fnm.'.jpg';
                move_uploaded_file($_FILES['pic11']['tmp_name'],$dst);

        $b1 =   rand(1111,9999);
                $b2 = rand(1111,9999);
                $b3 = $b1.$b2;
                $b3 = md5($b3);

                $fnm2 = $_FILES['pic22']['name'];
                $dstt = 'product/'.$b3.$fnm2.'.jpg';        //convert to jpg
                $dst2 = 'product/'.$b3.$fnm2.'.jpg';
                move_uploaded_file($_FILES['pic22']['tmp_name'],$dstt);

        $c1 =   rand(1111,9999);
                $c2 = rand(1111,9999);
                $c3 = $c1.$c2;
                $c3 = md5($c3);

                $fnm3 = $_FILES['pic33']['name'];
                $dsttt = 'product/'.$c3.$fnm3.'.jpg';        //convert to jpg
                $dst3 = 'product/'.$c3.$fnm3.'.jpg';
                move_uploaded_file($_FILES['pic33']['tmp_name'],$dsttt);

        $nama = $_POST['nama2'];
        $harga = $_POST['harga2'];
        $stok = $_POST['stok2'];
        $keterangan = $_POST['keterangan2'];
        $id = $_POST["id2"];
        $sql = "UPDATE produk SET nama='$nama', harga='$harga', stok='$stok', keterangan='$keterangan', pic1='$dst1', pic2='$dst2', pic3='$dst3' WHERE id='$id'";
   
        if (mysqli_query($conn, $sql)) {
        echo '<div id="transition">';
        echo "Product updated successfully";
        }else {
        echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        echo "<br>";
        }

    ?>
    </div>
</body>
</div>