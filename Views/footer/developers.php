
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers</title>

    <link rel="stylesheet" href="/sass/navbar.css">
    <link rel="stylesheet" href="/sass/FooterElementsCorrections.css">

    <script src="./../js/Toggler.js" defer></script>
    <script src="./../js/TopStoriesFetcher.js" type="module"></script>
</head>

<body>
    <?php  require_once  "./../Views/Templates/Navbar.php"?>

    <div class="devs_container">
        <div class="header">
            <h1>Developers of <?= $_ENV['WEBISTE_NAME'] ?? "Zoliberry"?></h1>
        </div>
        <div class="contents">
                <div class="dev-head">
                    This webiste "<?= $_ENV['WEBISTE_NAME'] ?? "Zoliberry"?>" was developed by
                </div>
                <div class="dev-details">
                    <div class="image">
                        <img src="/images/dev/developer.png" alt="No image found.">
                    </div>
                    <div class="description">
                        <div class="names">
                            <span>Names:</span>
                            <span><?= $_ENV['DEVELOPER_NAME'] ?? "PASCAL KAPULO" ?></span>
                        </div>
                        <div class="names">
                            <span>Field:</span> 
                            <span>Software Developer</span>
                        </div>
                        <div class="email">
                            <span>Email:</span> 
                            <span><?= $_ENV['DEVELOPER_EMAIL'] ?? "vkrivx41@gmail.com" ?>
                        </div>
                        <div class="phone">
                            <span>Phone:</span> 
                            <span><?= $_ENV['DEVELOPER_PHONE'] ?? "+250791357023" ?></span>
                        </div>
                        <div class="facebook">
                            <span>Facebook:</span>
                            <span><a target="blank" href="https://www.facebook.com/<?= $_ENV['DEVELOPER_FACEBOOK']?>"><?= $_ENV['DEVELOPER_FACEBOOK']?></a></span>
                        </div>
                        <div class="twitter"><span>Twitter:</span> 
                            <span>
                            <a target="blank" href="https://www.twitter.com/<?= $_ENV['DEVELOPER_TWITTER']?>"><?= $_ENV['DEVELOPER_TWITTER']?></a></div>
                    </div>
                </div>
        </div>
    </div>

    <?php  require_once  "./../Views/Templates/Footer.php"?>
</body>
</html>