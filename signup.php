<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body>
<div class="header">
    <div class="leftHead">
        <div class="logoBox"></div>
        <div class="headerLinks">
            <a href="Index.html">Home</a>
            <a href="Index.html">Store</a>
            <a href="Index.html">Library</a>
        </div>
    </div>

    <div class="headSpacer"></div>
    <div class="rightHead">
        <div class="balanceBox">
            <a class="balanceLink">
                Balance:
                <?php
                echo "3.00"
                ?> €
            </a>
        </div>
        <div class="sign-upBox"></div>
        <div class="profPicBox"></div>
    </div>
</div>


<main>
    <form action="php/Customer.php" method="post">

        <label for="username">Username: </label>
        <input type="text" name="username"><br>

        <label for="firstName">First name:</label>
        <input type="text" name="firstName"><br>

        <label for="lastName">Last name:</label>
        <input type="text" name="lastName"><br>

        <label for="email">Email: </label>
        <input type="email" name="email"><br>

        <label for="password">Password: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <footer class="footer">
        <div class="footLeft">
            <div class="footLeftTop">
                <a>Contact Us</a>
                <a>Upload your Game</a>
                <a>Join our team</a>
                <a>Blog</a>
            </div>
            <div class="footLeftBot">
                <div>
                    <a>Legal</a>
                    <a>Privacy policy</a>
                    <a>Cookies</a>
                </div>
                <div>
                    <p>Blah Blah Copyright shite lorem ipsum dolor your ma is nice</p>
                </div>
            </div>
        </div>
        <div class="footRight">
            <a><img src=""></a>
            <a><img src=""></a>
            <a><img src=""></a>
            <a><img src=""></a>
        </div>

    </footer>
</main>

</body>
</html>