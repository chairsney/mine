<!DOCTYPE HTML>
<html>
<head>
<title><?php echo "$this->title"?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/public/assets/css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header">
	<a href="<?=Yii::getAlias('@web')?>/blog/index" class="logo"><strong>LU BLOG</strong></a>
	<nav>
		<a href="#menu">Menu</a>
	</nav>
</header>

<!-- Nav -->
<nav id="menu">
	<ul class="links">
		<li><a href="<?=Yii::getAlias('@web')?>/blog/index">首页</a></li>
		<li><a href="<?=Yii::getAlias('@web')?>/blog/list">列表</a></li>
		<li><a href="<?=Yii::getAlias('@web')?>/blog/create">写文章</a></li>
	</ul>
</nav>

<!-- Main -->
<?php
    echo $content;
?>

<!-- Footer -->
<footer id="footer">
	<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	</ul>
	<div class="copyright">Copyright &copy; 2016.Company name All rights reserved.</div>
</footer>

<!-- Scripts -->
<script src="<?=Yii::getAlias('@web')?>/public/assets/js/jquery.min.js"></script>
<script src="<?=Yii::getAlias('@web')?>/public/assets/js/jquery.scrolly.min.js"></script>
<script src="<?=Yii::getAlias('@web')?>/public/assets/js/skel.min.js"></script>
<script src="<?=Yii::getAlias('@web')?>/public/assets/js/util.js"></script>
<script src="<?=Yii::getAlias('@web')?>/public/assets/js/main.js"></script>

</body>
</html>