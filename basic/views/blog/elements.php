<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/public/assets/css/main.css" />
</head>
<body>

<!-- Header -->
<header id="header">
	<a href="index.html" class="logo"><strong>LU BLOG</strong></a>
	<nav>
		<a href="#menu">Menu</a>
	</nav>
</header>

<!-- Nav -->
<nav id="menu">
	<ul class="links">
		<li><a href="index.html">Home</a></li>
		<li><a href="generic.html">Generic</a></li>
		<li><a href="elements.html">Elements</a></li>
	</ul>
</nav>

<!-- Main -->
<section id="main">
	<div class="inner">
		<header class="major special">
			<h1><?=$h1?></h1>
			<p><?=$p?></p>
		</header>

			<section>
				<form method="post" action="<?=$action?>">
					<div class="row uniform 50%">

						<div class="12u$">
							标题：
							<input type="text" name="title" id="title" value="" placeholder="Title" />
						</div>

						<div class="12u$">
							文章分类：
							<div class="select-wrapper">
								<select name="category" id="category">
									<option value="">- 请选择文章分类 -</option>
									<?php
										foreach ($category as $key => $value) {
											echo "<option value='".$key."'>".$value."</option>";
										}
									?>
								</select>
							</div>
						</div>

						<div class="12u$">
							文章内容：
							<textarea name="content" id="content" placeholder="Enter your text" rows="6"></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="提交" class="special" /></li>
								<li><input type="reset" value="重置" /></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
	</div>
</section>

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