<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>CHATEAU</title>
    <link rel="icon" type="image/x-icon" href="/misc/castel.ico">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout/checkout_css.css">
    <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<header>

    <nav class="navbar">
        <div class="brand">
            <a  class="home"href="index.php">CHATEAU</a>
        </div>
        <button aria-label="toggle-menu" id="responsiveMenuToggleButton">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="openIcon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="closeIcon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
        <div class="navbar-links">
            <ul>
                <li><a href="product_page.php">PRODUCTS</a></li>
                <li><a href="cart.php">CHECK OUT</a></li>
                <li>
                    <?php
        if (isset($_SESSION['userID']))
        {
            echo "<a href='login_page.php'>LOGOUT</a>";
                    }
        else
        {
            echo "<a href='login_page.php'>LOGIN</a>";
        }?>
                </li>
                <li>
                    <?php
            if (isset($_SESSION['userID']))
            {
                echo "<a>Welcome, ".$_SESSION['userUid']."!</a>";
                    }
                    else
                    {
                    echo "<a>Guest</a>";
                    }
                    ?></li>
            </ul>
        </div>
    </nav>

</header>

    <section id="hero">
        <h1>Cart</h1>
    </section>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form method="post" action="cart_functie.php">

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Ion Popescu">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="popescu@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="Giroc street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Timisoara">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">County</label>
                                <input type="text" id="state" name="state" placeholder="TM">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zipcode</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Ion Popescu">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container">
            <h4>Cart
                <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
            </h4>
            <?php
            require 'connection.php';
            $sql="SELECT * FROM items";
            $all_product=$conn->query($sql);
            $totalprice=0;
            while ($row=mysqli_fetch_assoc($all_product)){
                if(  isset($_SESSION['cos'][$row['id']])  ) {
                    echo '<p>' . $row['name'] . '<span class="price">' . $row['price'] . '$</span>' . '</p>';
                    $totalprice=$totalprice+$row['price'];
                }
            }


            ?>
            <hr>
            <p>Total <span class="price" style="color:black"><b><?php echo $totalprice?>$</b></span></p>
        </div>
    </div>
</div>
<section class="footer">
    <div class="social">
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.snapchat.com/"><i class="fab fa-snapchat"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    </div>
    <p class="copyright">CHATEAU @ 2023</p>
</section>
<script>
    const responsiveMenuButton=document.getElementById('responsiveMenuToggleButton');
    const navBarLinks=document.querySelector('.navbar-links')
    responsiveMenuButton.addEventListener('click',()=>{
        navBarLinks.classList.toggle('open');
        responsiveMenuButton.classList.toggle('open');
    });
    const allNavLinks=document.querySelectorAll('.navbar-links li');
    allNavLinks.forEach(link=>{
        link.addEventListener('click',()=>{
            navBarLinks.classList.remove('open');
            responsiveMenuButton.classList.remove('open');
        });
    })
</script>
</body>
</html>