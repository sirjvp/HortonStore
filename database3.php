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
    if(isset($_POST["delete"])){
    Include "database.php";
    $conn = connect();
    $id = $_POST["idp"];
    $sql = "DELETE FROM produk WHERE id='$id'";
        
    
    if (mysqli_query($conn, $sql)) {
    echo '<div id="transition">';
    echo "Product deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    }

    if(isset($_POST["update"])){
        Include "database.php";
        $conn = connect();
        $id = $_POST['idp'];
        $sql2 = "SELECT * FROM produk WHERE id = '$id'";
        $result = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
                ?>
                <div id = "update">
                    <form method = "post" action="database4.php" enctype="multipart/form-data">
                    <input type = "hidden" name = "id2" value = "<?php echo $row["id"] ?>"/><br><br>
                    <label>Nama Produk :</label>
                    <input type = "text" name = "nama2" value = "<?php echo $row["nama"] ?>"/><br><br>
                    <label>Harga :</label>
                    <input type = "text" name = "harga2" value = "<?php echo $row['harga'] ?>"/><br><br>
                    <label>Stok :</label>
                    <input type = "text" name = "stok2" value = "<?php echo $row["stok"] ?>"/><br><br>
                    <label>Keterangan :</label><br>
                    <input class="textarea" type = "text" name = "keterangan2" value = "<?php echo $row["keterangan"] ?>"/><br><br>
                    <label>Foto 1 :</label>
                    <input class="ifile" type = "file" name = "pic11" value = "<?php echo $row["pic1"] ?>"/><br><br>
                    <label>Foto 2 :</label>
                    <input class="ifile" type = "file" name = "pic22" value = "<?php echo $row["pic2"] ?>"/><br><br>
                    <label>Foto 3 :</label>
                    <input class="ifile" type = "file" name = "pic33" value = "<?php echo $row["pic3"] ?>"/><br><br>
                    <input type = "submit" value ="FINISH" name = "update2"/>
                    <br>
                    </form>
                </div>
                <?php
        }
        else {
            echo "can't found";
        }
        mysqli_close($conn);
        }
?>
</body>
</div>