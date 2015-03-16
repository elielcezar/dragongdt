<!DOCTYPE html>
<html>
	<head>
 
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php if ($is_front):  ?>	
       
      <link rel="image_src" href="http://elielcezar.com/sites/all/themes/elielcezar/img/elielcezar.jpg" />
      <meta name="robots" content="all" />            
      <meta name="description" content="" />
      <meta name="keywords" content="dragon, gdt, Geometric dimensioning and tolerancing" />

      <meta property="og:locale" content="pt_BR"> 
      <meta property="og:url" content="http://www.dragongdt.com">       
      <meta property="og:title" content="<?php print $head_title; ?>">
      <meta property="og:site_name" content="<?php print $head_title; ?>">       
      <meta property="og:description" content="">       
      <meta property="og:image" content="">
      <meta property="og:image:type" content="image/jpeg">       
      <meta property="og:type" content="website">
      
<?php endif; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php print $styles; ?>
<?php print $scripts; ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,600,700,300' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target=".navbar" class="<?php print $classes; ?>" <?php print $attributes;?>>

 <?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>


</body>
</html>
