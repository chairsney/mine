<!-- Main -->
<section id="main">
	<div class="inner">
		<div class="image fit">
			<img src="<?=Yii::getAlias('@web')?>/public/images/pic11.jpg" alt="" />
		</div>
		<header>
			<h1><?=$title?></h1>
			<p class="info"><?=$publishtime?> <a href="#"><?=$writer?></a></p>
		</header>
		<?=$content?>
	</div>
</section>