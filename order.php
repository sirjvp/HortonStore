<HTML>

<HEAD>
    <Title>Horton Store</Title>
    <link type="text/css" rel="stylesheet" href="layout.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</HEAD>

<BODY>
    <div id="top">
        <div id="icon">
            <a><IMG SRC="nav.png"></IMG></a>
        </div>
        <div id="logo">
            <img src="logo.png"></img>
        </div>
        <div id="search">
            <a href="https://www.instagram.com/jonathan_valentino/"><IMG SRC="search.png"></IMG></a>
        </div>
        <div id="admin">
            <a href="login.php"><IMG SRC="admin.png"></IMG></a>
        </div>
    </div>
    <div>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="selected" href="order.php">Order</a></li>
        </ul>
        </nav>
    </div>
    <div id="transition"></div>
    <div id="order">
        <form method = "post" action="order.php">
            <p>Nama Pembeli</p>
            <input type="text" name="name" value=""/>
            <p>Email</p>
            <input type="text" name="email" value=""/>
            <p>Nomor HP</p>
            <input type="text" name="hp" value=""/>
            <p>Produk</p>
            <input type="text" name="produk" value=""/>
            <p>Jumlah</p>
            <input type="text" name="jumlah" value=""/>
            <p>Alamat</p>
            <input type="text" name="alamat" value=""/>
            <br><br>
            <input type="hidden" name="waktu" value ="<?php echo date('Y-m-d') ?>" readonly/>
            <input type="submit" value="Selesai" name="submit"/>
        </form>
    </div>
    <div id="message">
    <?php
        if(isset($_POST["submit"])){
            if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['hp'] == "" || $_POST['produk'] == "" || $_POST['jumlah'] == "" || $_POST['alamat'] == ""){
                echo "Please fill all the blanks";
            }
            else{
                Include "database.php";
                $conn = connect();
                $sql = "INSERT INTO pemesanan(pembeli,email,hp,produk,jumlah,alamat,waktu)VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["hp"]."','".$_POST["produk"]."','".$_POST["jumlah"]."','".$_POST["alamat"]."','".$_POST["waktu"]."')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
            echo "<br>";

            $to = $_POST['email'];  //pembeli
            $from = "hortonstore@gmail.com";
            $subject = "Pemesanan Toko Horton";
            $message = "Hey, Terima kasih ".$_POST['name']." telah membeli produk kami! Produk yang dibeli adalah:
                        Produk  : ".$_POST['produk']."
                        Jumlah  : ".$_POST['jumlah']."";
            $headers = "From: " . $from;
            mail($to, $subject, $message, $headers);
    
            $to2 = "jonathanvalentinoprawira123@gmail.com";   //admin
            $from2 = $_POST['email'];
            $subject2 = $_POST["name"]." is purchasing on TuneBeat!";
            $message2 = $_POST['name']." telah membeli produk ".$_POST['produk']." sebanyak ".$_POST['jumlah']." buah. Silahkan cek di admin lebih detilnya!";
            $headers2 = "From: " . $from;
            mail($to2, $subject2, $message2, $headers2);
            }
        }
    ?>
    </div>
    <div id="transition"></div>
    <div id="footer">
        <h1>Contact</h1>
        <img src="WA.png"></img>
        <p>+62 811-9523-779</p>
        <br>
        <img id="tokped" src="tokopedia.png"></img>
        <a href="https://www.tokopedia.com/hortonstore19?source=universe&st=product&sort=5">Go to tokopedia</a>
        <br><br>
        <p id="credit">created by @jonathan_valentino</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#icon').click(function(){
            $('nav').toggleClass('active')
        })
    })
    </script>
</BODY>

</HTML>