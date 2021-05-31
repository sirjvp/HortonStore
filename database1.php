<html>
<head>
    <title>Horton Store</title>
    <link type="text/css" rel="stylesheet" href="layout.css">
</head>

<body>
    <div id="top">
        <div id="icon">
            <a href="index.php"><IMG SRC="back.png"></IMG></a>
        </div>
        <div id="logo">
            <img src="logo.png"></img>
        </div>
    </div>
    <div id = "transition"></div>
    <div id = "choice2">
        <a href="database1.php">Products </a>
        <a href="database2.php">| Order</a>
    </div>
    <div id = "transition"></div>
    <div id="add">
        <form method = "post" action="database1.php" enctype="multipart/form-data">
            <label>Nama Produk :</label>
            <input type = "text" name = "nama"/><br><br>
            <label>Harga :</label>
            <input type = "text" name = "harga"/><br><br>
            <label>Stok :</label>
            <input type = "text" name = "stok"/><br><br>
            <label>Keterangan :</label><br>
            <input class="textarea" type = "text" name = "keterangan"/><br><br>
            <label>Foto 1</label>
            <input class="ifile" type = "file" name = "pic1" accept = "image/*" /><br><br>
            <label>Foto 2</label>
            <input class="ifile" type = "file" name = "pic2" accept = "image/*" /><br><br>
            <label>Foto 3</label>
            <input class="ifile" type = "file" name = "pic3" accept = "image/*" /><br><br>
            <input type = "submit" value ="ADD" name = "submit1"/>
            <br>
        </form>
    
    <?php
        if(isset($_POST["submit1"])){
        Include "database.php";
        $conn = connect();
        $a1 =   rand(1111,9999);
                $a2 = rand(1111,9999);
                $a3 = $a1.$a2;
                $a3 = md5($a3);

                $fnm = $_FILES['pic1']['name'];
                $dst = 'product/'.$a3.$fnm.'.jpg';        //convert to jpg
                $dst1 = 'product/'.$a3.$fnm.'.jpg';
                move_uploaded_file($_FILES['pic1']['tmp_name'],$dst);

        $b1 =   rand(1111,9999);
                $b2 = rand(1111,9999);
                $b3 = $b1.$b2;
                $b3 = md5($b3);

                $fnm2 = $_FILES['pic2']['name'];
                $dstt = 'product/'.$b3.$fnm2.'.jpg';        //convert to jpg
                $dst2 = 'product/'.$b3.$fnm2.'.jpg';
                move_uploaded_file($_FILES['pic2']['tmp_name'],$dstt);

        $c1 =   rand(1111,9999);
                $c2 = rand(1111,9999);
                $c3 = $c1.$c2;
                $c3 = md5($c3);

                $fnm3 = $_FILES['pic3']['name'];
                $dsttt = 'product/'.$c3.$fnm3.'.jpg';        //convert to jpg
                $dst3 = 'product/'.$c3.$fnm3.'.jpg';
                move_uploaded_file($_FILES['pic3']['tmp_name'],$dsttt);

        $sql = "INSERT INTO produk(nama,harga,stok,keterangan,pic1,pic2,pic3)VALUES ('".$_POST["nama"]."','".$_POST["harga"]."','".$_POST["stok"]."','".$_POST["keterangan"]."','".$dst1."','".$dst2."','".$dst3."')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
        echo "<br>";
        }
        
    ?>
    </div>

    <br>
    <hr>
    <div id="transition"></div>
    
    <div id="rapi">
        <form method="post" action="database1.php">
            <input type="submit" name="show" value="Show Products">
    </div>
    <div id = "add2">
    <?php
        if(isset($_POST['show'])){
        Include "database.php";
        $conn = connect();
        $sql1 = 'SELECT * FROM produk';
        $result = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result) > 0) {
                ?>
                <Table class="tablee" border='1'>
                <TR>
                    <TD>ID</TD>
                    <TD>Nama Produk</TD>
                    <TD>Delete</TD>
                    <TD>Upload</TD>
                    <!-- <TD>pic1</TD>
                    <TD>pic2</TD>
                    <TD>pic3</TD> -->
                </TR>
                <?php
            while($row = mysqli_fetch_assoc($result)) {?>
                <TR>
                    <TD><?= $row["id"] ?></TD>
                    <TD><?= $row["nama"] ?></TD>
                    <form method="post" action="database3.php">
                    <input type=hidden name="idp" value="<?= $row["id"] ?>"/>
                    <TD><input type="submit" name="delete" value="delete"/></TD>
                    <TD><input type="submit" name="update" value="update"/></TD>
                    </form>
                    <!-- <TD><?= $row["pic1"] ?></TD>
                    <TD><?= $row["pic2"] ?></TD>
                    <TD><?= $row["pic3"] ?></TD> -->
                </TR>
                <?php
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>
    </Table>
    <?php } ?>
    </div>
    <div id="transition"></div>
</body>
</html>