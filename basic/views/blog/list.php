<section id="main">
				
	<div class="inner">
		<h1>文章列表</h1>
				<div class="table-wrapper">
					<table class="alt">
						<thead>
							<tr>
								<th>编号</th>
								<th>标题</th>
								<th>发布时间</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($blog as $k=>$v) { 
							$url_detail=\yii\helpers\Url::toRoute(['/blog/detail','id'=>$v['id']]);
							$url_edit=\yii\helpers\Url::toRoute(['/blog/modify','id'=>$v['id']]);
							$url_delete=\yii\helpers\Url::toRoute(['/blog/del','id'=>$v['id']]);
						?>
							<tr>
								<td><?=$v['id']?></td>
								<td><a href="<?=$url_detail?>"><?=$v['title']?></a></td>
								<td><?=$v['publishtime']?></td>
								<td><a href="<?=$url_edit?>">编辑</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="<?=$url_delete?>">删除</a></td>
							</tr>
						<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"></td>
							</tr>
						</tfoot>
					</table>
				</div>
	</div>
</section>