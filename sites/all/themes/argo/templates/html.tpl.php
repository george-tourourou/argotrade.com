<?php
include 'page-title.php';

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function IsAdmin() {
    if (in_array('administrator', array_values($GLOBALS['user']->roles))) {
        return true;
    }

    return false;
}

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
{
    $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
{
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $ip=$_SERVER['REMOTE_ADDR'];
}


if (isset($ip)) {
    setcookie("SESSip", $ip, time()+5184000, "/");
}

$queryParams = $_SERVER['QUERY_STRING'];

if(!empty($queryParams))  {
    $cookie_name = "SESSurl_params";
    $cookie_value = str_replace("%3D", "=", $queryParams);
    setcookie($cookie_name, $cookie_value, time()+5184000, "/");
}


?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" class="no-js" dir="<?php print $language->dir; ?>"<?php //print $rdf_namespaces;?>>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8PFND12TF3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-8PFND12TF3');
    </script>

    <?php
    $path_args = explode('/', current_path());
    if ($path_args[1]==679477){
        ?>
        <meta property="og:title" content="Investment: In 2 Minutes" />
        <meta property="og:description" content="Everything You Need To Know" />
    <?php }elseif($path_args[1]==679478){ ?>
        <meta property="og:title" content="Why Do Investors Trust ArgoTrade" />
        <meta property="og:description" content="The Reasons Are Not Surprising" />
    <?php 	}
    else{ ?>
        <meta property="og:image" content="https://www.argotrade.com/sites/all/themes/argo/Content/Images/Common/argotrade-logo-blue.svg" />

    <?php 	}
    ?>

    <link href="/sites/all/themes/argo/Content/Images/Common/argotrade_favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap" rel="stylesheet" />-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <?php
    if(IsAdmin()) { ?>
        <link rel="stylesheet" href="/sites/all/themes/finq/css/Components/Admin.css" />
        <link rel="stylesheet" href="/sites/all/modules/contrib/admin_menu/admin_menu.css" />
        <link rel="stylesheet" href="/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.css" />
        <link rel="stylesheet" href="/modules/contextual/contextual.css" />

        <link rel="stylesheet" href="/sites/all/themes/shiny/css/contrib.css" />
        <link rel="stylesheet" href="/sites/all/themes/shiny/css/jquery.ui.theme.css" />
        <link rel="stylesheet" href="/sites/all/themes/shiny/css/shiny.css" />
        <link rel="stylesheet" href="/sites/all/themes/shiny/css/style.css" />
        <link rel="stylesheet" href="/sites/all/themes/shiny/css/vertical-tabs.css" />
        <link rel="stylesheet" href="/sites/all/themes/shiny/css/views-admin.shiny.css" />
    <?php }
    ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="/sites/all/themes/argo/Content/js/WidgetCommunicator.js?v=2"></script>
    <script src="/sites/all/themes/argo/Content/js/Base64.js"></script>
    <script src="/sites/all/themes/argo/Content/js/Tabs.js"></script>

    <link rel="stylesheet" href="/sites/all/themes/finq2020/Content/CSS/Components/Loader.css?v=1" />
    <?php //WE NEED TO  FIND $HEAD VARIABLE ?>
<!--    --><?php //print $head; ?>
    <meta name="description" content="ArgoTrade provides the best trading platform for traders across the global markets. Try WebTrader to trade on 1000s of CFD assets and Forex online trading.">


	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "ArgoTrade",
	  "alternateName":"Argo.trade",
	  "description": "An online trading brokerage house, specializing in turnkey investment solutions",
	  "email":"support@argotrade.com",
	  "url":"https://www.argotrade.com/en",
	  "sameAs":[
	  "https://www.facebook.com/Argotrade-111774633774032",
	  "https://twitter.com/Argotrade1",
	  "https://play.google.com/store/apps/details?id=com.argotrade.android&hl=en&gl=US",
	  "https://apps.apple.com/lk/app/argotrade/id1535976703"
	],
	  "logo": "https://www.argotrade.com/sites/all/themes/argo/Content/Images/Common/argotrade-logo-blue.svg"
	}
	</script>

    <title><?php print getPageTitle($head_title); ?></title>

    <?php print $styles; ?>

    <?php

    if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];

        ?>
        <!-- <script>
window.dataLayer = window.dataLayer || []
dataLayer.push({
    'DatalayerPID': '<?php echo $pid; ?>',
    'event' : 'lead'
});
</script> -->
        <script>
            window.dataLayer = window.dataLayer || []
            dataLayer.push({'DataLayerPID': '<?php echo $pid; ?>','event' : 'lead'});
        </script>
        <?php

    }

    ?>


    <?php print $scripts; ?>

    <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"25052138"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>


    <?php if ($language->language=="ms"){ ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2233966516847208');
            fbq('track', 'PageView');
        </script>

        <noscript>
            <img height="1" width="1"
                 src="https://www.facebook.com/tr?id=2233966516847208&ev=PageView
		&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

    <?php } ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<?php print $page_top; ?>

<?php print $page; ?>

<?php print $page_bottom; ?>


</body>

</html>

