<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu-resp.css">
</head>
<body>
    <header>
        <nav id="nav">
            <a class="title" id="title" href="home.php">Foodle</a>
            <div class="nav-mid">
                <a id="home" class="different" href="home.php">Home</a>
                <a id="menu" class="different" href="menu.php?Category=1">Menu</a>
                <a id="about" class="different" href="about.php">About Us</a>
                <a id="find" class="different" href="FindUs.php">Find Us</a>
            </div>
            <div class="auth">
                <a class="login" href="">Login</a>
                <a class="signup" href="">Sign Up</a>
                <img id="humb-Icon" class="show-humb" src="../images/icons/humbergur icon.png" alt="">
            </div>
        </nav>
    </header>
    <div class="side-bar" id="side-bar">
        <div>
           <img id="close" src="../images/icons/close.png" alt="">
        </div>
        <ul>
           <li>
               <a href="home.php">Home</a>
           </li>
           <li>
               <a href="menu.php?Category=1">Menu</a>
           </li>
           <li>
               <a href="about.php">About Us</a>
           </li>
           <li>
               <a href="FindUs.php">Find Us</a>
           </li>
        </ul>
   </div>
    <div class="container">
        <div class="c-1">
            <h1>MENUS</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis esse blanditiis soluta iusto deleniti
                itaque mollitia vel natus placeat possimus.
            </p>
            <form action="menu.php" method="GET">
            <div class="toggle">
                <button type="submit" name="Category" value=1>Burgers</button>
                <button type="submit" name="Category" value=2>Crispy</button>
                <button type="submit" name="Category" value=3>Pasta</button>
                <button id="last" type="submit" name="Category" value=4>Salads</button>
            </div>
            </form>
            <p>Check out our menu and follow us on social media to hear about weekly offers</p>
            <a href="https://wa.me/81736415" target="_blank">ORDER NOW</a>
        </div>
        <div class="menu">
            <!-- <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div>
            <div class="food">
                <div class="img">
                    <img src="../images/food/burger.jpg" alt="">
                </div>
                <h3>Chicken Burger</h3>
                <img src="" alt="">
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$3.50</span>
                    <a>Buy Now</a>
                </div>
            </div> -->
        <?php

            include '../inc/connection.php';

            $Category='';
            

            if(isset($_GET['Category'])){

                $Category = $_GET['Category'];

            }

            
        $sql = "select * FROM food WHERE db_categoryId = '$Category'";
        $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="food">
                <div class="img">
                    <img src="../' . $row['db_foodImg'] . '" alt="">
                </div>
                <h3>' . $row['db_foodName'] . '</h3>
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$' . $row['db_foodPrice'] . '</span>
                    <a href="https://wa.me/81736415">Buy Now</a>
                </div>
            </div>';
    }
}
?>

        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h2>Foodish</h2>
                <p>Continue Foodish 2024 all right reserved</p>
                <h2>Follow Us On</h2>
                <div class="icons">
                    <img src="../images/icons/pinterest-logo.png" alt="">
                    <img src="../images/icons/instagram (1).png" alt="">
                    <img src="../images/icons/facebook.png" alt="">
                    <img src="../images/icons/tik-tok.png" alt="">
                </div>
            </div>
            <div>
                <h2>Menu</h2>
                <ul>
                    <li>Home</li>
                    <li>Offers</li>
                    <li>Service</li>
                    <li>About Us</li>
                </ul>
            </div>
            <div>
                <h2>Information</h2>
                <ul>
                    <li>Menu</li>
                    <li>
                        Quality
                    </li>
                    <li>
                        Make a Choice
                    </li>
                    <li>
                        Salad With Vegetable
                    </li>
                    <li>
                        Fast Delivery
                    </li>
                    <li>
                        Subscribe
                    </li>
                </ul>
            </div>
            <div>
                <h2>Contact</h2>
                <ul>
                    <li>+961 81736415</li>
                    <li>
                        Explore
                    </li>
                    <li>
                        info@Foodish.Com
                    </li>
                    <li>
                        Lebanon
                    </li>
                </ul>
            </div>
        </div>
    </footer>
   <script src="../js/index.js"></script>
</body>

</html>