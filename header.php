<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php echo description; ?>" />
<meta name="keywords" content="<?php echo keywords; ?>" />

<title><?php echo title; ?> | Your/Company Name</title>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>

</head>

<body id="<?php echo pageid; ?>">

<div id="wrapper" class="hfeed">

<header id="header" role="banner"> 

<h1 id="site-title"><a href="./">Your/Company Name</a></h1>

<nav id="menu" role="navigation">

<ul class="xoxo">

<li><a href="./">Page 1</a> |
<ul>
<li><a href="#">Level 1: Sub 1</a></li>
<li><a href="#">Level 1: Sub 2</a></li>
<li><a href="#">Level 1: Sub 3</a>
<ul>
<li><a href="#">Level 2: Sub 1</a></li>
<li><a href="#">Level 2: Sub 2</a></li>
<li><a href="#">Level 2: Sub 3</a>
<ul>
<li><a href="#">Level 3: Sub 1</a></li>
<li><a href="#">Level 3: Sub 2</a></li>
<li><a href="#">Level 3: Sub 3</a></li>
</ul></li>
</ul></li>
</ul></li>
<li><a href="page2.php">Page 2</a> |</li>
<li><a href="page3.php">Page 3</a> |</li>
<li><a href="page4.php">Page 4</a> |</li>
<li><a href="contact.php">Contact</a></li>

</ul>

</nav>

</header>

<div id="container">

<article id="content" class="hentry">