<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
    <?php print render($region['driver_configurations']);  ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
<!--    <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />-->
<!--    <link href="css/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />-->
<!--    <link href="css/x_layout.css" media="screen" rel="stylesheet" type="text/css" />-->
    <!--[if IE 7]>
    <link rel="stylesheet" href=/css/font-awesome-ie7.css">
    <![endif]-->
</head>
<body>
<?php //include './'. base_path().path_to_theme() .'/templates/section--header.php';?>
<!--  <div id="skip-link">-->
<!--    <a href="#main-content" class="element-invisible element-focusable">--><?php //print t('Skip to main content'); ?><!--</a>-->
<!--  </div>-->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<?php //include './'. base_path().path_to_theme() .'/templates/section--footer.php';?>
</body>
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>-->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<?php //echo '<script type="text/javascript" src="'.base_path().path_to_theme().'/js/home.js"></script>';?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php print render($region['driver_configurations_bottom']);  ?>
</html>
