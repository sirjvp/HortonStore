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
            <li><a class="selected" href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="order.php">Order</a></li>
        </ul>
        </nav>
    </div>
    <div id="transition"></div>
    <?php
        Include "database.php";
        $conn = connect();

        $sql = 'SELECT * FROM produk';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo '<div class="content">';
                echo '<div class="row">';

                while($row = mysqli_fetch_assoc($result)){  
                    ?><div class="card">
                    <?php
                        echo '<div class="card-container">';
                            echo '<img class="item-image" src='.$row['pic1'].'>';
                            echo '<p>'. $row['nama'] .'</p>';
                            echo '<p class="bold">Rp .'.$row['harga'].'</p>';
                        echo '</div>';
                        $nama = $row['nama'];
                        $harga = $row['harga'];
                        $stok = $row['stok'];
                        $keterangan = $row['keterangan'];
                        $pic11 = $row['pic1'];
                        $pic22 = $row['pic2'];
                        $pic33 = $row['pic3'];
                    ?>
                    <form method="post" action="detail.php" enctype="multipart/form-data">
                        <input type="hidden" name="a" value="<?= $nama ?>"/>
                        <input type="hidden" name="b" value="<?= $harga ?>"/>
                        <input type="hidden" name="c" value="<?= $stok ?>"/>
                        <input type="hidden" name="d" value="<?= $keterangan ?>"/>
                        <input type="hidden" name="e" value="<?= $pic11 ?>"/>
                        <input type="hidden" name="f" value="<?= $pic22 ?>"/>
                        <input type="hidden" name="g" value="<?= $pic33 ?>"/>
                        <input type="submit" name="submit" value="More info"/>
                    </form>
                    </div>
                    <?php  
                }
                echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="empty">';
            echo '</div>';
        }
        mysqli_close($conn);
    ?>
    <!-- <div class="button-center">
        <a class="bar-item-center">Show More</a>
    </div> -->
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