<?php
session_start();
require 'connection.php';
$sql="SELECT * FROM items";
$all_product=$conn->query($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>CHATEAU</title>
    <link rel="icon" type="image/x-icon" href="/misc/castel.ico">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products/productpage_css.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
</head>
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
                <li><?php
                    if (isset($_SESSION['userID']))
                    {
                        echo "<a href='cart.php'>CHECK OUT</a>";
                    }
                    else
                    {
                        echo "<a href='login_page.php'>CHECK OUT</a>";
                    }?></li>
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
    <h1>Products</h1>
</section>
<!--<section id="description"></section>-->
<main>
    <?php
    while ($row=mysqli_fetch_assoc($all_product)){

        ?>
        <div class="card">
            <div class="image">
                <img src="<?php echo $row["image"];?>">
            </div>
            <div class="caption">
                <p class="product_name"><?php  echo $row["name"]?></p>
                <p class="Author"><?php echo $row["author"]?></p>
                <p class="price"><strong><?php echo $row["price"]?>€</strong></p>

                <button class="add" id='<?php echo $row['id']?>'>Purchase</button>
            </div>
        </div>
        <?php
    }
    ?>

</main>
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
    $(document).ready(function() {
        $('.add').click(function() {
            var clickBtnValue =this.id;
            let atr = $(this).attr("name");
            var ajaxurl = 'adauga_cos.php',
                data =  {'action': clickBtnValue};
            $.post(ajaxurl, data, function (response) {
            alert("Product added to the cart.");
            });
        });
    });
</script>
</body>
</html>