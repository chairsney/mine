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
							<input type="text" name="title" id="title" value="<?=$title?>" placeholder="Title" />
						</div>

						<div class="12u$">
							文章分类：
							<div class="select-wrapper">
								<select name="category" id="category">
									<option value="">- 请选择文章分类 -</option>
									<?php foreach ($category as $key => $value) { ?>
											<option value='<?=$key?>' <?php if($key==$category_id) echo 'selected';?>><?=$value?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="12u$">
							文章内容：
							<textarea name="content" id="content" placeholder="" rows="6"><?=$content?></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="提交" class="special" /></li>
								<li><input type="reset" value="重置" /></li>
							</ul>
						</div>
					</div>
					<input type="hidden" name="id"  value="<?=$id?>" placeholder="" />
				</form>
			</section>
	</div>
</section>