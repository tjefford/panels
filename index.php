<?php include 'config.php';
    $site = new Site;
?>

<!DOCTYPE html>
<html lang=en-US prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $site->title; ?></title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <meta name="author" content="<?php echo $site->author; ?>" />
    <meta name=description content="<?php echo $site->description; ?>" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="dist/styles/main.css" />

</head>
<body>
<header id="header">
    <h1 id="logo"><a href="/"><i class="brand"></i> Panels</ia></h1>

    <nav>
        <ul>
            <li><a href="#home" alt="Home"><i class="fa fa-home"></i></a></li>
            <li><a href="https://bitbucket.org/tjefford/panels" alt="BitBucket" target="_blank"><i class="fa fa-bitbucket-square"></i></a></li>
        </ul>
    </nav>
</header>
<div id="fullpage">

    <?php
        foreach($site->panels as $k=>$name){
            include $name[1];
        }
    ?>
</div>

<script>
    (function(d, e, j, h, f, c, b) {
        d.GoogleAnalyticsObject = f;
        d[f] = d[f] || function() {
                    (d[f].q = d[f].q || []).push(arguments)
                }, d[f].l = 1 * new Date();
        c = e.createElement(j), b = e.getElementsByTagName(j)[0];
        c.async = 1;
        c.src = h;
        b.parentNode.insertBefore(c, b)
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
    ga("create", "<?php echo $site->GA; ?>", "auto");
    ga("require", "displayfeatures");
    ga("send", "pageview");
</script>

<script src="dist/scripts/jquery.js"></script>
<script src="dist/scripts/jquery-ui.js"></script>
<script src="dist/scripts/main.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // Sets up the fullpage plugin with the names, colors and other options
        // Documentation found here: https://github.com/alvarotrigo/fullPage.js#fullpagejs
        jQuery('#fullpage').fullpage({
            sectionsColor: [<?php foreach($site->panels as $k=>$name){echo '"'.$name[0].'",';} ?>],
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: [<?php foreach($site->panels as $k=>$name){ echo '"'.$k.'",';} ?>],
            showActiveTooltip: false,
        });
    });
</script>

</body>
</html>
