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
						同步选项：
						</div>

						<div class="6u 12u$(small)">
							<input type="checkbox" id="copy" name="copy" checked>
							<label for="copy">QQ空间</label>
						</div>
						<div class="6u$ 12u$(small)">
							<input type="checkbox" id="human" name="human">
							<label for="human">博客</label>
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