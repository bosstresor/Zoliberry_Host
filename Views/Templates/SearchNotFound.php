<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="/sass/navbar.css">
    <link rel="stylesheet" href="/sass/Home.css">
    <link rel="stylesheet" href="/sass/Mobile.css">
    <link rel="stylesheet" href="/sass/News.css">

    <script src="./../js/Toggler.js" defer></script>
    <script src="./../js/TopStoriesFetcher.js" type="module"></script>
</head>
<body>
    <?php require_once  "./../Views/Templates/Navbar.php" ?>
    <?php require_once "./../Views/Templates/Services.php"?>

    <div class="message">
        <h1>No result found for what you are looking for.</h1>
        <a href="/">Go back to home</a>
    </div>

    <div class="posts_container">
        <?php require './../Views/Templates/Topstories.php' ?>
        <?php require './../Views/Templates/Storiesgrid.php' ?>
        <?php require  "./../Views/Templates/Mobileview.php" ?>
    </div>

    <footer>
    <div class="left-footer">
        <div class="header" style="color: white;">Find Us here.</div>
        <div class="find-us-link">
            <div class="link">
                <a style="color: white;" href="https://facebook.com/zoliberry">Facebook</a>
            </div>
            <div class="link">
                <a style="color: white;" href="https://instagram.com/zoliberry">Instagram</a>
            </div>
            <div class="link">
                <a style="color: white;" href="https://twitter.com/Zoliberry">Twitter</a>
            </div>
            <div class="link">
                <a style="color: white;" href="https://tiktok.com/@zoliberry">TikTok</a>
            </div>
            <div class="link">
                <a style="color: white;" href="https://threads.net/@zoliberry">Threads</a>
            </div>
        </div>
    </div>
    <div class="center-footer">
        <div style="color: white;" class="header">Explore <?= $_ENV['WEBSITE_NAME'] ?? "ZOLIBERY"?></div>
        <div class="explore-links">
            <div class="link">
                <a style="color: white;" href="/">Home</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/News">News</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/Music">Music</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/Sports">Sports</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/Lifestyle">Lifestyle</a>
            </div>
        </div>
    </div>
    <div class="right-footer">
        <div class="header" style="color: white;">
            Work and Operate with us.
        </div>
        <div class="operation-links">
            <div class="link">
                <a style="color: white;" href="/AdvertiseWithUs">Advertise with us</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/AboutUs">About us</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/ContactUs">Contact us</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/Privacy">Privacy and policy</a>
            </div>
            <div class="link">
                <a  style="color: white;"href="/TermsAndConditions">Terms and Conditions</a>
            </div>
            <div class="link">
                <a style="color: white;" href="/Developers">Developers of <?= $_ENV['WEBSITE_NAME'] ?? "Zoliberry" ?></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>


<style>
    .message{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: 50px auto;
    }

    .message > h1{
        font-size: 30px;
        text-align: center;
    }

    .message > a{
        text-decoration: none;
        padding: 20px 6px;
        font-weight: bold;
        color: hsl(200, 100%, 20%);
    }

    @media screen and (max-width: 500px) {
        .message > h1{
            width: 80%;
            font-size: 20px;
            text-align: center;
        }
    }
    footer{
        background: black;
        color: red;
    }
    footer > div > div> .link{
        border: none;
        border-right: 2px solid white;
    }
</style>