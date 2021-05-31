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
            <li><a class="selected" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="order.php">Order</a></li>
        </ul>
        </nav>
    </div>
    <div id="title">
        <div class="text">
            <p id="one">Horton Store</p>
            <p id="two">Tools & Hardware</p>
            <p id="three">Shop Now!</p>
        </div>
    </div>
    <div id="transition"></div>
    <div id="promo1">
    </div>
    <div id="transition"></div>
    <div id="promo2">
    </div>
    <div id="transition"></div>
    <div id="promo3">
    </div>
    <div id="transition"></div>
    <div id="about">
        <div id="bio">
            <p>&nbsp;&nbsp;&nbsp;Horton Store adalah toko online yang terpercaya. Menjual alat-alat kebutuhan sehari-hari. Dengan Harga
            yang mampu bersaing dan kualitas yang terjamin. Horton Store menjadi toko online yang akan anda sayangi.
            </p>
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
</BODY>

</HTML>