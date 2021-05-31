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
            <li><a class="selected" href="about.php">About</a></li>
            <li><a href="order.php">Order</a></li>
        </ul>
        </nav>
    </div>
    <div id="transition"></div>
    <div id="info">
        <h1>Info Toko</h1>
        <div id="text">
            <p>&nbsp;&nbsp;&nbsp;Horton Store adalah toko online yang terpercaya. Menjual alat-alat kebutuhan sehari-hari. Dengan Harga
            yang mampu bersaing dan kualitas yang terjamin. Horton Store menjadi toko online yang akan anda sayangi.
            </p>
        </div>
    </div>
    <div id="transition"></div>
    <div id="photo">
        <img src="5.png"></img>
    </div>
    <div id="transition"></div>
    <div id="alamat">
        <h1>Alamat, Lokasi</h1>
        <div id="text">
            <p>Jakarta Barat, Grogol, Kota Administrasi Jakarta Barat, 11460</p>
        </div>
    </div>
    <div id="transition"></div>
    <div id="galeri">
        <h1>Gallery</h1>
        <div id="foto">
            <img src="6.jpg"></img>
            <img src="7.jpg"></img>
            <img src="8.jpg"></img>
            <img src="9.jpg"></img>
            <img src="10.jpg"></img>
            <img src="11.jpg"></img>
        </div>
    </div>
    <div id="transition"></div>
    <div id="footer2">
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
    <script src="JS.js"></script>
</BODY>

</HTML>