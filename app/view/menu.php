<html>

    <head>
        <title>Menu</title>
        <base href="http://localhost/mvc/public/" />
        <link rel="Stylesheet" type="text/css" href="css/ecommerce.css"/>
    </head>
    <body>
        <div id="header">
            <div id="userHead">
                <?php
                    session_start();
                    echo $_SESSION['username'];
                ?>
                <form method="post" action="menu">
                    <input type="submit" name="logoutButton" value="Logout"/>
                </form>
            </div>
            <div id="topNav">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="index/inventory">Products</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="index/viewcart">View Cart</a></li>
                </ul>
                <!--
                <form method="post" action="menu">
                    <input type="submit" name="main" class="buttonTest" value="Home" />
                    <input type="submit" name="inventory" class="buttonTest" value="Products" />
                    <input type="submit" name="profile" class="buttonTest" value="Profile" />
                    <input type="submit" name="viewCart" class="buttonTest" value="View Cart" />
                </form>
                -->
            </div>
        </div>

