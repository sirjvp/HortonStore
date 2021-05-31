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
            <li><a href="order.php">Order</a></li>
        </ul>
        </nav>
    </div>
    <div id="transition"></div>
    <div id="order">
        <h1>Log In</h1>(Admin Only)
        <form method = "post" action="login.php">
            <p>Email</p>
            <input type="text" name="email" value=""/>
            <p>Password</p>
            <input type="password" name="pass" value=""/>
            <br><br>
            <input type="submit" name="submit" value="Log in" id="submit"/>
        </form>
    </div>
    <div id="message">
    <?php
    if(isset($_POST['submit'])){
        if($_POST['email'] != "horton@gmail.com" || $_POST['pass'] != "123456"){
                ?><p>Incorrect email or password.</p><?php
        }
        else{
            ?><a href="database1.php">Click here to go to admin page.</a><?php
        }
    }
    ?> 
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