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
    <div id = "choice">
        <a href="database1.php">Products </a>|
        <a href="database2.php">Order</a>
    </div>
    <div id = "transition"></div>
    <div id = "show">
    <?php
        Include "database.php";
        $conn = connect();
        $sql1 = 'SELECT * FROM pemesanan';
        $result = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"]. "<br>";
                echo "Nama Pembeli: " . $row["pembeli"]. "<br>";
                echo "Email: " . $row["email"]. "<br>";
                echo "Nomor HP: " . $row["hp"]. "<br>";
                echo "Produk: " . $row["produk"]. "<br>";
                echo "Jumlah: " . $row["jumlah"]. "<br>";
                echo "Alamat: " . $row["alamat"]. "<br>";
                echo "Waktu: " . $row["waktu"]. "<br><br><hr>";
            }
        } else {
            echo '<div class="nol">0 results</div>';
        }
        mysqli_close($conn);
    ?>
    </div>
</body>
</html>